<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Datetime;
use Hash;
use DB;
use Session;
use BinaryCats\Sku\HasSku;
use Redirect;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Logo;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class AdminsController extends Controller
{


    /* Vednors Module */
    public function mysettings(){
        activity()->log('Accessed All Categories');
        $User = User::find(Auth::User()->id);
        $page_title = 'list';
        $page_name = 'Categories';
        return view('admin.mysettings',compact('page_title','User','page_name'));
    }
    /* Vednors Module */
    public function vendors(){
        activity()->log('Accessed All Categories');
        $User = User::all();
        $page_title = 'list';
        $page_name = 'Categories';
        return view('admin.vendors',compact('page_title','User','page_name'));
    }

    /* Vednors Module */
    public function orders(){
        activity()->log('Accessed All Categories');
        $Orders = Order::all();
        $page_title = 'list';
        $page_name = 'Orders';
        return view('admin.orders',compact('page_title','Orders','page_name'));
    }

    /* Categories Module */
    public function categories(){
        activity()->log('Accessed All Categories');
        $Category = Category::all();
        $page_title = 'list';
        $page_name = 'Categories';
        return view('admin.categories',compact('page_title','Category','page_name'));
    }

    public function addCategory(){
        $Category = Category::all();
        activity()->log('Accessed Add Category Page');
        $page_title = 'formfiletext';
        $page_name = 'Add Category';
        return view('admin.addCategory',compact('page_title','page_name','Category'));
    }

    public function add_Category(Request $request){
        activity()->log('Evoked add Category Operation');
        $path = 'uploads/categories';

        if(isset($request->image)){
            $dir = 'uploads/categories';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $Category = new Category;
        $Category->title = $request->title;
        $Category->slung = Str::slug($request->title);
        $Category->content = $request->content;
        $Category->image = $SaveFilePath;
        $Category->save();
        Session::flash('message', "Category Has Been Added");
        return Redirect::back();
    }

    public function editCategories($id){
        activity()->log('Access Edit Category ID number '.$id.' ');
        $Category = Category::find($id);
        $Categories = Category::all();
        $page_title = 'formfiletext';
        $page_name = 'Edit Home Page Slider';
        return view('admin.editCategory',compact('page_title','Category','Categories','page_name'));
    }

    public function edit_Category(Request $request, $id){
        activity()->log('Evoked Edit Category For Category ID number '.$id.' ');

        if(isset($request->image)){
            $dir = 'uploads/categories';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $updateDetails = array(
            'title'=>$request->title,
            'slung' => Str::slug($request->title),

            'content'=>$request->content,
            'image'=>$SaveFilePath

        );
        DB::table('categories')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function deleteCategory($id){
        activity()->log('Deleted Category ID number '.$id.' ');
        DB::table('categories')->where('id',$id)->delete();
        return Redirect::back();
    }



    /* brands Module */
    public function brands(){
        activity()->log('Accessed All brands');
        $Brand = Brand::all();
        $page_title = 'list';
        $page_name = 'brands';
        return view('admin.brands',compact('page_title','Brand','page_name'));
    }

    public function addBrand(){
        $Brand = Brand::all();
        activity()->log('Accessed Add Brand Page');
        $page_title = 'formfiletext';
        $page_name = 'Add Brand';
        return view('admin.addBrand',compact('page_title','page_name','Brand'));
    }


    public function add_Brand(Request $request){
        activity()->log('Evoked add Brand Operation');
        $path = 'uploads/brands';

        if(isset($request->image)){
            $dir = 'uploads/brands';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $Brand = new Brand;
        $Brand->title = $request->title;
        $Brand->slung = Str::slug($request->title);
        $Brand->content = $request->ckeditor;
        $Brand->image = $SaveFilePath;
        $Brand->save();
        Session::flash('message', "Brand Has Been Added");
        return Redirect::back();
    }

    public function editbrands($id){
        activity()->log('Access Edit Brand ID number '.$id.' ');
        $Brand = Brand::find($id);
        $Brands = Brand::all();
        $page_title = 'formfiletext';
        $page_name = 'Edit Home Page Slider';
        return view('admin.editBrand',compact('page_title','Brand','Brands','page_name'));
    }

    public function edit_Brand(Request $request, $id){
        activity()->log('Evoked Edit Brand For Brand ID number '.$id.' ');

        if(isset($request->image)){
            $dir = 'uploads/brands';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $updateDetails = array(
            'title'=>$request->title,
            'slung' => Str::slug($request->title),
            'content'=>$request->ckeditor,
            'image'=>$SaveFilePath

        );
        DB::table('brands')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function deleteBrand($id){
        activity()->log('Deleted Brand ID number '.$id.' ');
        DB::table('brands')->where('id',$id)->delete();
        return Redirect::back();
    }

    /* Products Functions*/
    public function products(){
        activity()->log('Accessed All Products');
        $Products = Product::paginate(12);
        $page_title = 'list';
        $page_name = 'Products';
        return view('admin.products',compact('page_title','Products','page_name'));
    }

    public function addProduct(){
        $Category = Category::all();
        $Products = Product::all();
        activity()->log('Accessed Add Product Page');
        $page_title = 'formfiletext';
        $page_name = 'Add Product';
        return view('admin.addProduct',compact('page_title','page_name','Category','Products'));
    }

    public function add_Product(Request $request){
        activity()->log('Evoked add Product Operation');

        if(isset($request->image)){
            $dir = 'uploads/products';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $Product = new Product;
        $Product->name = $request->title;
        $Product->qty = $request->qty;
        $Product->user_id = Auth::User()->id;
        $Product->slung = Str::slug($request->title);
        $Product->meta = $request->meta;
        $Product->category = $request->category;
        $Product->stock = "In Stock";
        $Product->price_raw = $request->price;
        $Product->price = $request->price;
        $Product->content = $request->content;
        $Product->image = $SaveFilePath;
        $Product->save();
        Session::flash('message', "Product Has Been Added");
        return Redirect::back();
    }

    public function editProduct($id){
        $Category = Category::all();
        $Product = Product::find($id);
        $Products = Product::all();
        activity()->log('Access Edit Product: '.$Product->title.' ');
        $page_title = 'formfiletext';
        $page_name = 'Edit Home Page Slider';
        return view('admin.editProduct',compact('page_title','Products','page_name','Category','Product'));
    }

    public function edit_Product(Request $request, $id){
        activity()->log('Evoked Edit Product For Product ID number '.$id.' ');
        $path = public_path('uploads/products');
        if(isset($request->image)){
            $dir = 'uploads/products';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $updateDetails = array(
            'name'=>$request->title,
            'user_id'=>$request->user_id,
            'slung' => Str::slug($request->title),
            'content'=>$request->content,
            'meta'=>$request->meta,
            'price'=>$request->price,
            'category'=>$request->category,
            'brand'=>$request->brand,
            'image'=>$SaveFilePath,
        );
        DB::table('products')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function deleteProduct($id){
        activity()->log('Deleted Product ID number '.$id.' ');
        DB::table('products')->where('id',$id)->delete();
        return Redirect::back();
    }

    /* User Module */
    public function users(){
        activity()->log('Accessed All User');
        $User = User::all();
        $page_title = 'list';
        $page_name = 'User';
        return view('admin.users',compact('page_title','User','page_name'));
    }

    public function addUser(){
        activity()->log('Accessed Add User Page');
        $page_title = 'formfiletext';
        $page_name = 'Add User';
        return view('admin.addUser',compact('page_title','page_name'));
    }

    public function add_User(Request $request){
        activity()->log('Evoked add User Operation');
        $path = 'uploads/users';

        if(isset($request->image)){
            $dir = 'uploads/users';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        if(isset($request->logo)){
            $dir = 'uploads/users/logos/';
            $file = $request->file('logo');
            $realPath = $request->file('logo')->getRealPath();
            $SaveFilePathLogo = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePathLogo = $request->logo_cheat;
        }

        $User = new User;
        $User->name = $request->name;
        $User->company = $request->company;
        $User->slung = Str::slug($request->company);
        $User->content = $request->ckeditor;
        $User->image = $SaveFilePath;
        $User->logo = $SaveFilePathLogo;
        $User->save();
        Session::flash('message', "User Has Been Added");
        return Redirect::back();
    }

    public function editUser($id){
        activity()->log('Access Edit User ID number '.$id.' ');
        $User = User::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Edit Home Page Slider';
        return view('admin.editUser',compact('page_title','User','page_name'));
    }

    public function edit_User(Request $request, $id){
        activity()->log('Evoked Edit User For User ID number '.$id.' ');

        if(isset($request->image)){
            $dir = 'uploads/users';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        if(isset($request->logo)){
            $dir = 'uploads/users/logos/';
            $file = $request->file('logo');
            $realPath = $request->file('logo')->getRealPath();
            $SaveFilePathLogo = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePathLogo = $request->logo_cheat;
        }

        $updateDetails = array(
            'title'=>$request->name,
            'company'=>$request->company,
            'slung' => Str::slug($request->company),
            'content'=>$request->ckeditor,
            'image'=>$SaveFilePath,
            'image'=>$SaveFilePathLogo
        );
        DB::table('users')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function deleteUser($id){
        $User = User::find($id);
        activity()->log('Deleted User '.$User->name.' ');
        DB::table('users')->where('id',$id)->delete();
        return Redirect::back();
    }

    /* logos Module */
    public function video(){
        $Settings = DB::table('_site_settings')->get();
        activity()->log('Accessed All logos');
        $page_title = 'list';
        $page_name = 'video';
        return view('admin.video',compact('page_title','page_name','Settings'));
    }

    public function logos(){
        activity()->log('Accessed All logos');
        $Logo = Logo::all();
        $page_title = 'list';
        $page_name = 'logos';
        return view('admin.logos',compact('page_title','Logo','page_name'));
    }

    public function addLogo(){
        activity()->log('Accessed Add Logo Page');
        $page_title = 'formfiletext';
        $page_name = 'Add Logo';
        return view('admin.addLogo',compact('page_title','page_name'));
    }


    public function add_Logo(Request $request){
        activity()->log('Evoked add Logo Operation');
        $path = 'uploads/clients';

        if(isset($request->image)){
            $dir = 'uploads/logos';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $Logo = new Logo;
        $Logo->title = $request->title;
        $Logo->slung = Str::slug($request->title);
        $Logo->image = $SaveFilePath;
        $Logo->save();
        Session::flash('message', "Logo Has Been Added");
        return Redirect::back();
    }

    public function editlogos($id){
        activity()->log('Access Edit Logo ID number '.$id.' ');
        $Logo = Logo::find($id);
        $page_title = 'formfiletext';
        $page_name = 'Edit Home Page Slider';
        return view('admin.editLogo',compact('page_title','Logo','page_name'));
    }

    public function edit_Logo(Request $request, $id){
        activity()->log('Evoked Edit Logo For Logo ID number '.$id.' ');

        if(isset($request->image)){
            $dir = 'uploads/logos';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $updateDetails = array(
            'title'=>$request->title,
            'slung' => Str::slug($request->title),
            'image'=>$SaveFilePath
        );
        DB::table('logos')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function deleteLogo($id){
        activity()->log('Deleted Logo ID number '.$id.' ');
        DB::table('logos')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function update_embeded(Request $request){
        activity()->log('Evoked Edit Logo For Video ');

        $updateDetails = array(
            'embede'=>$request->embede,

        );
        DB::table('_site_settings')->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function index(){
        return view('admin.index');
    }


    /* Generic Email Sender */
    public function emailSender($recepient,$recepientEmail,$Subject,$Message){
        $Sender = "Pharmex Africa";
        $SenderId = "pharmex.africa";
        $reciever = $recepient;
        $receiverEmail = $recepientEmail;
        $SendEmail = SendEmail::sendEmail($Sender,$SenderId,$Message,$reciever,$receiverEmail,$Subject);
        return Redirect::back();
    }

    /* Generic SMS API Sender*/
    public function sendSMS($Message,$PhoneNumber){
        $message = $Message;
        $phone =$PhoneNumber;
        $senderid = "DESIGNEKTA";
        //
        $url = 'https://bulk.cloudrebue.co.ke/api/v1/send-sms';
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJhdWQiOiJodHRwczpcL1wvYnVsay5jbG91ZHJlYnVlLmNvLmtlXC8iLCJpYXQiOjE2NTM5Nzc0NTEsImV4cCI6NDgwOTczNzQ1MSwiZGF0YSI6eyJlbWFpbCI6ImluZm9AZGVzaWduZWt0YS5jb20iLCJ1c2VyX2lkIjoiMTQiLCJ1c2VySWQiOiIxNCJ9fQ.N3y4QhqTApKi46YSiHmkaoEctO9z6Poc4k1g44ToyjA";
        $post_data=array(
            'sender'=>$senderid,
            'phone'=>$phone,
            'correlator'=>'Whatever',
            'link_id'=>null,
            'message'=>$message
        );
        $data_string = json_encode($post_data);
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization:Bearer '.$token,
                'Content-Length: ' . strlen($data_string)
                )
            );
        $response = curl_exec($ch);
        curl_close($ch);
    }
    /* Generic location Module*/
    public function currentUserInfo()
    {
        $ip = Request::ip();
        $currentUserInfo = Location::get($ip);
        return view('admin.currentUserInfo', compact('currentUserInfo'));
    }
    /* File Uploads Generic function*/
    public function genericFIleUpload($file,$dir,$realPath){
        $image_name = $file->getClientOriginalName();
        $file->move(public_path($dir),$image_name);
        $url = url('/');
        $image_path = "$url/$dir/" . $image_name;
        return $image_path;
    }
}
