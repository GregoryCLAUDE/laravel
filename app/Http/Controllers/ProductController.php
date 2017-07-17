<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{

  public function welcome(){
    return view ("products/create_product");
  }

  public function getAllProducts(){
    $products=Product::all();
    return view("products/products", ["products" => $products]);
  }

  public function getProduct($id){
    $product=Product::where ("id",$id)->get();
    //dd($product);
    return view("products/product_detail", ["product" => $product]);
  }

  public function updateProduct(Request $request, $id){
    $product = Product::find($id);
    $product->name = $request->name;
    $product->quantity = $request->quantity;
    $product->price = $request->price;
    $product->save();
    return redirect("/products");
  }

  public function deleteProduct($id){
    $product = Product::destroy($id);
    return redirect("/products");
  }

  public function addProduct(Request $request){

    $product = new Product;
    $product->name = $request->name;
    $product->quantity = $request->quantity;
    $product->price = $request->price;

    $product->save();
    return redirect("/products");
  }
}
