<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function create()
    {
        // return view('productos.create');
    }
    /**
     * 
     * @return \Illuminate\Http\Response
     * 
    */
    public function index(){

        // return view('productos.index');

        // $products = Product::all();
        // return response() -> json([
        //     'products' => $products
        // ]);

        // return view('productos.index');

        $producto = Product::all();
        return $producto;
        
    }

    /**
     * 
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request){
        // $product = Product::create($request->all());

        // return response()->json([
        //     'message' => 'Producto agregado exitosamente...!',
        //     'product' => $product
        // ], 200);

        $producto = new Product();
        $producto->name = $request->name;
        $producto->detail = $request->detail;

        $producto->save();
    }


    /**
     * 
     * @param  \Illuminate\Http\Response $request
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request){
        // public function update(Request $request, Product $product){

        // $product -> update($request -> all());

        // return response()->json([
        //     'message' => 'Producto actualizado exitosamente...!',
        //     'product' => $product
        // ]);

        $producto = Product::findOrFail($request->id);
        $producto->name = $request->name;
        $producto->detail = $request->detail;

        $producto->save();
        return $producto;

    }


    /**
     * 
     * @param  \Illuminate\Http\Response $request
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     * 
     */
    public function destroy(Request $request){
        // $product -> delete();

        // return response()->json([
        //     'message' => 'Producto eliminado exitosamente...!',
        // ], 200);

        $producto = Product::destroy($request->id);
        return $producto;
    }
}
