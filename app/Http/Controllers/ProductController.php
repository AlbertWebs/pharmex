<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductsImport;
use App\Models\Product;
use Illuminate\Support\Facades\Log;



class ProductController extends Controller
{
    public function import(Request $request)
    {
        try{

            Excel::import(new ProductsImport, $request->file('file'));
            return response()->json(['data'=>'Users imported successfully.',201]);
        }catch(\Exception $ex){
            Log::info($ex);
            return response()->json(['data'=>'Some error has occur.',400]);

        }
    }

    public function index(){
        $Product = Product::all();
        return view('products', compact('Product'));
    }
}
