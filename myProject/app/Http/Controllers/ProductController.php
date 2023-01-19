<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
    function insert(Request $req){
        $name = $req->get('ProductName');
        $category = $req->get('ProductCategory');
        $price = $req->get('ProductPrice');
        $image = $req->file('ProductImage') -> getClientOriginalName();
        //move uploaded file
        $req -> ProductImage ->move(public_path('productImages'), $image);

        // return $req -> input();

        // to save the inserted data into the database folder instatiate the model class product
         $product = new product();
         //since id is primary key ani autoincrement gareko cha teslai we dont need to mention
         $product -> ProductName =  $name;
         $product -> Category = $category;
         $product -> ProductPrice =  $price;
         $product -> ProductImage =  $image;
         
         //this function will save the data in database after inserting
         $product -> save();
        //after inserting again returning back to crud page
        return redirect('crud');
    }
    function readdata(){
        //pagination gareko
        // $productData = product::all();
        return  view ('crud',['data' => product::paginate(3)]);
    }
    function display(){
        return view('FrontEnd.productDisplay',['product' => product::paginate(4)]);
    }

    //update function
    function updateordelete(Request $req){
       $id = $req->get('Id');
       $ProductName = $req->get('ProductName');
       $category = $req->get('Category');
       $ProductPrice = $req->get('ProductPrice');

       if ($req -> get('update')=='Update'){
        return view ('updateView',['ProductId' => $id, 'ProductName'=>$ProductName, 'Category'=>$category,'ProductPrice'=>$ProductPrice]);
       }
       else{
        $prod = product::find($id);
        $prod -> delete();
       }
       return redirect('crud');
    }
    function update(Request $req){
        $ProductId = $req -> get('ProductId');
        $ProductName = $req->get('ProductName');
        $category = $req -> get('Category');
       $ProductPrice = $req->get('ProductPrice');

       $prod = product::find($ProductId);
       $prod -> ProductName = $ProductName;
       $prod -> ProductPrice = $ProductPrice;
       $prod -> save();
       return redirect('crud');
    }

//shop page but sorting from Max price to Min price
public function sortMaxtoMin(){
    $category=Category::all();
    $product = Product::orderBy('price', 'DESC')->paginate(6);
    return view('shop', compact('product', 'category'));
}

//shop page but sorting from Min price to Max price
public function sortMintoMax(){
    $category=Category::all();
    $product = Product::orderBy('price', 'ASC')->paginate(6);
    return view('shop', compact('product', 'category'));
}
  
}
