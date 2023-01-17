<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class CrudController extends Controller
{
    //
    function insert(Request $req){
        $name = $req->get('ProductName');
        $price = $req->get('ProductPrice');
        $image = $req->file('ProductImage') -> getClientOriginalName();
        //move uploaded file
        $req -> ProductImage ->move(public_path('productImages'), $image);

        // return $req -> input();

        // to save the inserted data into the database folder instatiate the model class product
         $product = new product();
         //since id is primary key ani autoincrement gareko cha teslai we dont need to mention
         $product -> ProductName =  $name;
         $product -> ProductPrice =  $price;
         $product -> ProductImage =  $image;
         
         //this function will save the data in database after inserting
         $product -> save();
        //after inserting again returning back to crud page
        return redirect('crud');
    }
    function readdata(){
        $productData = product::all();
        return  view ('insertRead',['data' => $productData]);
    }

    //update function
    function updateordelete(Request $req){
       $id = $req->get('Id');
       $ProductName = $req->get('ProductName');
       $ProductPrice = $req->get('ProductPrice');

       if ($req -> get('update')=='Update'){
        return view ('updateView',['ProductId' => $id, 'ProductName'=>$ProductName, 'ProductPrice'=>$ProductPrice]);
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
       $ProductPrice = $req->get('ProductPrice');

       $prod = product::find($ProductId);
       $prod -> ProductName = $ProductName;
       $prod -> ProductPrice = $ProductPrice;
       $prod -> save();
       return redirect('crud');
    }
}
