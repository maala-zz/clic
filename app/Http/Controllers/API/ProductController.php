<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product ;
use App\Price_group ;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Product::all()) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product ;
        $product->name = $request->input('name') ;
        $product->active = $request->input('active') ;
        $product->current_price = $request->input('currentPrice') ;
        $product->old_price = $request->input('oldPrice') ;
        $product->save() ;
        // new product with new price_group, just for testing Eloquent
        $price_group = new Price_group ;
        $price_group->store_id = $request->input('storeId') ;
        $res = $product->price_groups()->save($price_group) ;
        return response()->json([$res]) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id) ;
        return response()->json([$product]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newName = $request->input('newName') ;
        $product = Product::find($id);
        $product->name = $newName ;
        $product->save() ;
        return response()->json([$product]) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->delete() ;
        return response()->json(["product" => $product]) ;
    }
}
