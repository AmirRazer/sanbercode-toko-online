<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OrderItem;
use App\Models\Products;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $OrderItem = OrderItem::all();
      return view('backend.order-item.index', compact('OrderItem'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //saya ingin membuat form untuk menambahkan order item
        $user = User::all();
        $product = Products::all();
         $OrderItem = new OrderItem;

        return view('backend.order-item.create', compact('user', 'product', 'OrderItem'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $OrderItem = OrderItem::find($id);
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
