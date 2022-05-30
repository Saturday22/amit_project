<?php

namespace App\Http\Controllers;
//use App\Models\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::all();
        return view('admin.admin',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request->product_picture;
        $file_extension=$request->picture->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
          $path='upload_pic';
         $request->picture->move($path,$file_name);
       Product::create([
        'product_name' =>$request->product_name,
        'product_price' =>$request->product_price,
        'product_picture'=>$file_name,
    ]);
    return redirect()->back()->with('add_product', 'Product saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product=Product::find($id);
        return view('Admin.edit',compact('product'));
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
        //
        //return "done";
        $product=Product::find($id);
        $request->new_price==null? $new_price=$product->price : $new_price=$request->new_price ;
        $product->update([
         "product_price"=>$new_price,
        ]);
        return redirect()->back()->with('update', 'Product updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       // return "done";
       $product=Product::find($id);
       $img_destination='upload_pic/'.$product->product_picture;
       if(File::exists($img_destination)){
           File::delete($img_destination);
       }
       $product->delete();
       return redirect()->back();



    }
}
