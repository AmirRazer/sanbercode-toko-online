<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "berita berhasil di tambahkan";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        // return view('backend.product.create', compact('category'));
        return view('backend.product.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        dd($request) ;
        
    $request->validate([
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'category_id' => 'required',
                'gambar' => 'required|mimes:jpeg,png,jpg|max:2048',

            ]);
            $namagambar = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('gambar'), $namagambar);

            $product = new Products;
            $product->name = $request['name'];
            $product->description = $request['description'];
            $product->price = $request['price'];
            $product->stock = $request['stock'];
            $product->category_id = $request['category_id'];
            $product->gambar = $namagambar;
            $product->save();

             
            return redirect('/products');

     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
