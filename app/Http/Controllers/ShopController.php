<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Redirect;

class ShopController extends Controller
{
    public function index(){
        $Product = Product::paginate(20);
        return view('exchange.index', compact('Product'));
    }

    public function product($slung){
        $ProductSlung = Product::where('slung', $slung)->first();
        // dd($ProductSlung->brand_name);

        $Product = Product::where('sku',$ProductSlung->sku)->get();
        return view('exchange.shop', compact('Product'));


    }

    public function cart(){
        $cartItem = Cart::content();
        return view('exchange.shopping-cart', compact('cartItem'));
    }

    public function checkout(){
        $cartItem = Cart::content();
        if(Auth::User()){
            return view('exchange.checkout', compact('cartItem'));
        }else{
            return view('exchange.checkout-login', compact('cartItem'));
        }

    }

    public function checkout_admin(){
        $cartItem = Cart::content();
        if(Auth::User()){
            return view('admin.checkout_admin', compact('cartItem'));
        }else{
            return view('exchange.checkout-login', compact('cartItem'));
        }

    }



    public function select(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('stock-exchange/shopping-cart/checkout')
                        ->withSuccess('You have Successfully loggedin');
        }

        return redirect("select-login")->withError('Oppes! You have entered invalid credentials');
    }

    public function destroy(){
        Cart::destroy();
    }

    public function destroys($id){
        Cart::remove($id);
        return Redirect::back();
    }

    public function add(Request $request){
        // dd(Cart::content());
        // dd($request->all());
        $product_id = $request->product_id;
        $qtybutton = $request->qtybutton;
        $Product = Product::find($product_id);
        $CurrentQty = $Product->quantity;
        if($CurrentQty < $qtybutton){
            echo "<script>alert('You Ordered More Than Its Available in Stock')</script>";
        }else{
            Cart::add($Product->id,$Product->brand_name, $qtybutton, $Product->price, 550);
            $cartItem = Cart::content();
            return view('exchange.shopping-cart', compact('cartItem'));
        }

    }

    public function addAdmin(Request $request){
        // dd(Cart::content());
        // dd($request->all());
        $product_id = $request->product_id;
        $qtybutton = $request->qtybutton;
        $Product = Product::find($product_id);
        $CurrentQty = $Product->quantity;
        if($CurrentQty < $qtybutton){
            echo "<script>alert('You Ordered More Than Its Available in Stock')</script>";
        }else{
            Cart::add($Product->id,$Product->brand_name, $qtybutton, $Product->price, 550);
            $cartItem = Cart::content();
            return view('admin.shopping-cart', compact('cartItem'));
        }

    }

    public function thankYou()
    {
        $latest = orders::orderBy('created_at','DESC')->first();
        if($latest == null){
            $OrderId = 1;
        }else{
            $OrderID = $latest->id;
            $OrderId = $OrderID+1;
        }

        $InvoiceNumber = "wkz-".$OrderId;
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
        // Send SMS
        $this->sendSMS(str_replace( '+', '', $phone),$SMSMessage);
        // SMS Supplier
        $this->sendSMS(str_replace( '+', '', $SupplierMobile),$SMSMessage);
        // Create Order
        orders::createOrder();
        // Destroy Cart
        \Cart::destroy();

        return view('dashboard.thankYou');
    }
}
