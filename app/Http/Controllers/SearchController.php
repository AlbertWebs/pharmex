<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Sample;



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
         $data = Sample::select("brand_name")->distinct()->where("brand_name","LIKE","%{$request->get('search')}%")->limit('5')->get();
         return response()->json($data);
     }

     public function autocompletes(Request $request)
     {
         $data = Sample::select("generic_name")->distinct()->where("generic_name","LIKE","%{$request->get('search')}%")->limit('5')->get();
         return response()->json($data);
     }

     public function autocompletez(Request $request)
     {
         $data = Sample::select("pharmacological_class")->distinct()->where("pharmacological_class","LIKE","%{$request->get('search')}%")->limit('5')->get();
         return response()->json($data);
     }







}
