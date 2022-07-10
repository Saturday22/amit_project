<?php

namespace App\Http\Controllers;

use session;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class CartController extends Controller
{
    //
    public function addToCart($id)
    {
        // return $id;
        $product = Product::find($id);
       // return $product;
        $cart = session()->get('cart');
        if (!$cart) {
           // return 'done';
            $cart = [
                $id => [
                    'id'=>$product->id,
                    "product_name" => $product->product_name,
                    "quantity" => 1,
                    "product_price" => $product->product_price,
                    "product_picture" => $product->product_picture
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            'id'=>$product->id,
            "product_name" => $product->product_name,
            "quantity" => 1,
            "product_price" => $product->product_price,
            "product_picture" => $product->product_picture
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function cart()
    {
        $cart = session()->get('cart');
       return view('cart',compact('cart'));
    }
    public function remove($id)
    {

            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return redirect()->back()->with('success', 'card deleted successfully!');


    }
}


