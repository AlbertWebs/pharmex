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
use App\Models\Dosage;
use App\Models\SendEmail;
use App\Models\Strength;
use App\Models\Brand;
use App\Models\Logo;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;
use App\Models\orders;
use Gloudemans\Shoppingcart\Facades\Cart;


use App\Imports\ExpiredsImport;
use App\Models\Expired;

class AdminsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /* Vednors Module */
    public function mysettings(){
        activity()->log('Accessed All Categories');
        $User = User::find(Auth::User()->id);
        $page_title = 'list';
        $page_name = 'Categories';
        return view('admin.mysettings',compact('page_title','User','page_name'));
    }

    /* Vednors Module */
    public function listed_products(){
        activity()->log('Accessed All Categories');
        $Products = Product::where('status','1')->paginate(20);
        $page_title = 'list';
        $page_name = 'Categories';
        return view('admin.listed_products',compact('page_title','Products','page_name'));
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


     /* Strength Module */
     public function strengths(){
        activity()->log('Accessed All dosages');
        $Strength = Strength::paginate(12);
        $page_title = 'list';
        $page_name = 'dosages';
        return view('admin.strengths',compact('page_title','Strength','page_name'));
    }
     /* dosages Module */
     public function dosages(){
        activity()->log('Accessed All dosages');
        $Dosage = Dosage::paginate(12);
        $page_title = 'list';
        $page_name = 'dosages';
        return view('admin.dosages',compact('page_title','Dosage','page_name'));
    }

    public function addDosage(){
        $Dosage = Dosage::all();
        activity()->log('Accessed Add Dosage Page');
        $page_title = 'formfiletext';
        $page_name = 'Add Dosage';
        return view('admin.addDosage',compact('page_title','page_name','Dosage'));
    }


    public function add_Dosage(Request $request){
        activity()->log('Evoked add Dosage Operation');
        $path = 'uploads/dosages';

        if(isset($request->image)){
            $dir = 'uploads/dosages';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }

        $Dosage = new Dosage;
        $Dosage->title = $request->title;
        $Dosage->slung = Str::slug($request->title);
        $Dosage->content = $request->ckeditor;
        $Dosage->image = $SaveFilePath;
        $Dosage->save();
        Session::flash('message', "Dosage Has Been Added");
        return Redirect::back();
    }

    public function editdosages($id){
        activity()->log('Access Edit Dosage ID number '.$id.' ');
        $Dosage = Dosage::find($id);
        $Dosages = Dosage::all();
        $page_title = 'formfiletext';
        $page_name = 'Edit Home Page Slider';
        return view('admin.editDosage',compact('page_title','Dosage','Dosages','page_name'));
    }

    public function edit_Dosage(Request $request, $id){
        activity()->log('Evoked Edit Dosage For Dosage ID number '.$id.' ');

        if(isset($request->image)){
            $dir = 'uploads/dosages';
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
        DB::table('dosages')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have been saved");
        return Redirect::back();
    }

    public function deleteDosage($id){
        activity()->log('Deleted Dosage ID number '.$id.' ');
        DB::table('dosages')->where('id',$id)->delete();
        return Redirect::back();
    }

    /* Products Functions*/
    public function products(){
        activity()->log('Accessed All Products');
        if(Auth::User()->type == "1" || Auth::User()->type == "admin"){
            $Products = Product::paginate(12);
        }else{
            $Products = Product::where('UserID', Auth::User()->id)->paginate(12);
        }


        $page_title = 'list';
        $page_name = 'Products';
        return view('admin.products',compact('page_title','Products','page_name'));
    }

    /* Products Functions Admin*/
    public function products_all(){
        activity()->log('Accessed All Products');
        $Products = Product::paginate(12);

        $page_title = 'list';
        $page_name = 'Products';
        return view('admin.products_all',compact('page_title','Products','page_name'));
    }


    public function addProduct(){
        $Category = Category::all();
        $Products = Product::paginate(10);
        activity()->log('Accessed Add Product Page');
        $page_title = 'formfiletext';
        $page_name = 'Add Product';
        return view('admin.addProduct',compact('page_title','page_name','Category','Products'));
    }

    public function add_expired_post(Request $request)
    {
        // dd($request);
        try{
            Excel::import(new ExpiredsImport, $request->file('file'));
            return response()->json(['data'=>'Users imported successfully.',201]);
        }catch(\Exception $ex){
            Log::info($ex);
            return response()->json(['data'=>'Some error has occur.',400]);

        }
    }



    public function statusTask(Request $request){
        $productId = $request->id;
        $statusRq = $request->status;
        $ProductFetch = Product::find($productId);
        if($ProductFetch->status=="0"){
            $status="1";
        }else{
            $status="0";
        }

        $updateDetails =  array(
            'status'=>$status
        );


        DB::table('products')->where('id',$productId)->update($updateDetails);
        if($status == '1'){
            $UserDetails = User::find($ProductFetch->UserID);
            $message = "Dear $UserDetails->name, Your listing has been approved for listing";
            SendEmail::notifications($UserDetails->name,$UserDetails->email,$message);

        }

        return response()->json([
            "status" => true,
            "data" => $status
        ]);
    }

    public function add_expired(Request $request)
    {
        $Products = \App\Models\Expired::all();
       return view('admin.addExpiredMedicines', compact('Products'));
    }

    public function add_Product(Request $request){
        activity()->log('Evoked add Product Operation');
        // dd($request);

        if(isset($request->image)){
            $dir = 'uploads/products';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }




        $priceFinal = ($request->bpperpack)*($request->packs);

        $Product = new Product;
        $Product->brand_name = $request->brand_name;
        $Product->generic_name = $request->generic_name;
        $Product->pharmacological_class = $request->pharmacological_class;

        $Product->dosage = $request->dosage;
        $Product->strength = $request->strength;
        $Product->batch_no = $request->batch_no;
        $Product->expiry = $request->expiry;
        $Product->packsize = $request->packsize;
        $Product->packs = $request->packs;
        $Product->bpperpack = $request->bpperpack;
        $Product->distribution = $request->distribution;
        $Product->quantity = $request->packs;
        $Product->UserID = Auth::User()->id;
        $Product->slung = Str::slug($request->title);
        $Product->meta = $request->meta;
        $Product->category = $request->category;
        $Product->stock = "In Stock";
        $Product->price_raw = $priceFinal;
        $Product->price = $priceFinal;
        $Product->image = $SaveFilePath;
        $Product->save();
        Session::flash('message', "Product Has Been Added");
        $page_title = "";
        $page_name = "";
        $username = Auth::User()->name;
        $Subject = "Listing otification";
        $MessageToSend = "Hello Admin, User Called $username has Listed $request->brand_name and requesting Approval";
        // Email
        SendEmail::mailAdmin($Subject,$MessageToSend);
        if (isset($request->expired)) {
            return view('admin.addExpiredMedicines');
        }else{
            if(Auth::User()->type == "1" || Auth::User()->type == "admin"){
                $Products = Product::paginate(12);
            }else{
                $Products = Product::where('UserID', Auth::User()->id)->paginate(12);
            }
            return view('admin.products', compact('Products'));
        }

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
        $priceFinal = ($request->bpperpack)*($request->packs);

        $updateDetails = array(
            'brand_name'=>$request->brand_name,
            'generic_name'=>$request->generic_name,
            'pharmacological_class'=>$request->pharmacological_class,
            'dosage'=>$request->dosage,
            'strength'=>$request->strength,
            'batch_no'=>$request->batch_no,
            'expiry'=>$request->expiry,
            'packsize'=>$request->packsize,
            'packs'=>$request->packs,
            'distribution'=>$request->distribution,
            'bpperpack'=>$request->bpperpack,
            'quantity'=>$request->packs,
            'user_id'=>$request->user_id,
            'slung' => Str::slug($request->title),
            'content'=>$request->content,
            'meta'=>$request->meta,
            'price'=>$priceFinal,
            'category'=>$request->category,
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

    public function deleteExpiredProduct ($id){
        activity()->log('Deleted Expired Product ID number '.$id.' ');
        DB::table('expireds')->where('id',$id)->delete();
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

    public function company_details($id){
        $User = User::find($id);
        $Productz = Product::where('UserID',$id)->paginate(12);
        return view('admin.company_details', compact('User','Productz'));
    }



    public function updateProductImage(){
        $Product = Product::all();
        foreach($Product as $product){
            $updateDetails = array(
                'image'=>"https://pharmex.africanpharmaceuticalreview.com/uploads/products/24e76dbd-ecf7-4831-9458-6722ef1a311d.jpg"
            );

            $Update = DB::table('products')->where('id',$product->id)->update($updateDetails);
        }
    }

    public function updateProductSlung(){
        $Product = Product::all();
        foreach($Product as $product){
            $updateDetails = array(
                'slung'=>Str::slug($product->generic_name),
            );

            $Update = DB::table('products')->where('id',$product->id)->update($updateDetails);
        }
    }

    public function random(){
        $FourDigitRandomNumber = mt_rand(100,5000);
        return $FourDigitRandomNumber;
    }

    public function randomTwo(){
        $ThreeDigitRandomNumber = mt_rand(1999,5999);
        return $ThreeDigitRandomNumber;
    }



    public function updateProductQuantity(){
        $Product = Product::all();
        foreach($Product as $product){

            $updateDetails = array(
                'quantity'=>$this->random()
            );

            $Update = DB::table('products')->where('id',$product->id)->update($updateDetails);
        }
    }
    public function updateProductPrice(){
        $Product = Product::all();
        foreach($Product as $product){

            $updateDetails = array(
                'price'=>($this->random())-($this->randomTwo()),
                'price_raw'=>$this->random()
            );

            $Update = DB::table('products')->where('id',$product->id)->update($updateDetails);
        }
    }

    public function autocomplete(Request $request)

    {

        $data = Product::select("brand_name")

                ->where("brand_name","LIKE","%{$request->query}%")

                ->get();



        return response()->json($data);

    }

    public function place_order(){
        $latest = orders::orderBy('created_at','DESC')->first();
        if($latest == null){
            $OrderId = 1;
        }else{
            $OrderID = $latest->id;
            $OrderId = $OrderID+1;
        }
        $InvoiceNumber = "pharmex-".$OrderId;
        // /** Send To Supplier **/ //
        $Cart = Cart::content();
        foreach($Cart as $cart){
            $ProductID = $cart->id;
            $Product = Product::find($ProductID);
            $SupplierID = $Product->UserID;
            $Supplier = User::find($SupplierID);
            $SupplierEmail = $Supplier->email;
            $SupplierName = $Supplier->name;
            $SupplierMobile = $Supplier->mobile;
            $SendEmail = SendEmail::MailSupplier($SupplierEmail,$SupplierName,$InvoiceNumber);
            if($SendEmail){
                Log::info("Email Has been Sent:".$SupplierEmail);
            }
        }
        // /** Send To User **/ //
        $email = Auth::User()->email;
        $name = Auth::User()->name;
        $phone = Auth::User()->mobile;
        SendEmail::mailUser($email,$name,$InvoiceNumber);
        $SMSMessage = "Dear $name, Your order #$InvoiceNumber has been received for processing, We will contact you about delivery";
        $SMSSupplier= "Dear $SupplierName, You have a new order!! Order number #$InvoiceNumber, Kindly login and fulfill at your earlierst convinience";
        // Create Order
        orders::createOrder();
        // Destroy Cart
        \Cart::destroy();
        return view('admin.thankYou');
    }

    public function thanks(){
        return view('admin.thankYou');
    }

    public function expired_products(){
        $Products = \App\Models\Expired::paginate(12);
        return view('admin.expired_products', compact('Products'));
    }



    public function rfq_request(Request $request){
        if(isset($request->rfq_file)){
            $dir = 'uploads/rfq';
            $file = $request->file('rfq_file');
            $realPath = $request->file('rfq_file')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = $request->image_cheat;
        }
        $title = $request->title;
        $content = $request->content;
        $email = $request->email;
        $RFQ = new \App\Models\Rfq;
        $RFQ->title = $title;
        $RFQ->content = $content;
        $RFQ->email = $email;
        $RFQ->rfq = $SaveFilePath;
        $RFQ->save();
        SendEmail::mailRfq($content,$email,$SaveFilePath);

        return Redirect::Back();
    }

    public function request_rfq(){
        return view('admin.rfq');
    }
    public function all_orders(){
        $Orders = Order::paginate(12);
        return view('admin.all_orders', compact('Orders'));
    }

    public function pending_orders(){
        $Orders = Order::where('status','pending')->paginate(12);
        return view('admin.all_orders', compact('Orders'));
    }

    public function completed_orders(){
        $Orders = Order::where('status','completed')->paginate(12);
        return view('admin.all_orders', compact('Orders'));
    }

    public function add_admin(){
        $Admin = User::where('admin','1')->where('type','1')->get();
        return view('admin.add_admin', compact('Admin'));
    }


    public function add_admin_post(Request $request){
        $User = new User;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->company = $request->company;
        $User->position = $request->position;
        $User->mobile = $request->mobile;
        $User->location = $request->location;
        $User->license = $request->license;
        $User->type = $request->type;
        $User->admin = $request->admin;
        $User->password = Hash::make($request->password);
        $User->save();
        return Redirect::back();
    }

    public function deleteAdmin($id){
        activity()->log('Deleted User ID number '.$id.' ');
        DB::table('users')->where('id',$id)->delete();
        return Redirect::back();
    }

    public function editAdmins($id){
        $Admin = User::where('admin','1')->where('type','1')->get();
        $User = User::find($id);
        return view('admin.editAdmins', compact('User','Admin'));
    }

    public function edit_admin_post(Request $request,$id){
        $updateDetails = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'company'=>$request->company,
            'position'=>$request->position,
            'license'=>$request->license,
            'type'=>$request->type,
            'admin'=>$request->admin,
        );
        DB::table('users')->where('id',$id)->update($updateDetails);
        return Redirect::back();
    }


    public function order_process_accept($id){
        $Orders = Order::where('id',$id)->get();
        return view('admin.process', compact('Orders'));
    }

    public function accept_order(Request $request){
        $Order =$request->order_id;
        $updateDetails = array(
            'status'=>$request->status,
        );
        DB::table('orders')->where('id',$Order)->update($updateDetails);
        $OrderDetails = order::find($Order);
        $User = User::find($OrderDetails->user_id);
        $MessageToSend = "Your Order has been process with status: $request->status<br> Remark: $request->remark";
        $subject = "Order Update";
        SendEmail::notification($User->name,$User->email,$MessageToSend,$subject);
        return Redirect::back();
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
