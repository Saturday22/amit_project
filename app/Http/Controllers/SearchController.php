<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function Search(Request $request)
    {
       //return 'done';
       $price=$request->search;
       $search=Product::where('product_price',$price)->get();
       //return $search;
       return view('search.search',compact('search'));
    }
}
