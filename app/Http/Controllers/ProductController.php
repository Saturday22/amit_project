<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function getAllProducts(){
        return Product::all();
    }

    function getProductById($id){
        // echo "<script>console.log('". $id . "'); </script>";
        $product = Product::where('id', $id)->first();

        // foreach($product as $p){
        //     echo $p->product_name;
        // }
        return $product;
    }
}
