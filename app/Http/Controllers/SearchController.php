<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Product;



class SearchController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        return view('search');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

     public function autocomplete(Request $request)
     {
         $data = Product::select("brand_name")->where("brand_name","LIKE","%{$request->get('search')}%")->limit('5')->get();
         return response()->json($data);
     }

     public function autocompletes(Request $request)
     {
         $data = Product::select("generic_name")->where("generic_name","LIKE","%{$request->get('search')}%")->limit('5')->get();
         return response()->json($data);
     }

     public function autocompletez(Request $request)
     {
         $data = Product::select("pharmacological_class")->where("pharmacological_class","LIKE","%{$request->get('search')}%")->limit('5')->get();
         return response()->json($data);
     }







}
