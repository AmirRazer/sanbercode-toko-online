<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function addCart($product_id)
    {
        $product = Products::find($product_id);
        //tambahkan barang ke cart
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $product->id;
        $cart->qty = 1;
        $cart->price = $product->price;
        $cart->save();
        return redirect()->back();
    }
}
