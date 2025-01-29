<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(){
        $Product = Product::paginate(20);
        return view('exchange.index', compact('Product'));
    }

    public function product($slung){
        $Product = Product::where('slung',$slung)->get();
        return view('exchange.shop', compact('Product'));
    }
}
