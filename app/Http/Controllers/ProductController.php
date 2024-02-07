<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use File;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $product = products::all();
        return view('backend.product.index', compact('product'));
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
        // dd($request) ;
        
    $request->validate([
                'name' => 'required',
               
                'price' => 'required',
                'stock' => 'required',
                'gambar' => 'required|mimes:jpeg,png,jpg|max:2048',
                 'description' => 'required',
                'category_id' => 'required',
                

            ]);
            $namagambar = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('gambar'), $namagambar);

            $product = new Products;
            // $product->name = $request['name'];
        
            // $product->price = $request['price'];
            // $product->stock = $request['stock'];
            //    $product->gambar = $namagambar;
            //        $product->description = $request['description'];
            // $product->category_id = $request['category_id'];
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->stock = $request->input('stock');
            $product->gambar = $namagambar;
            $product->description = $request->input('description');
            $product->category_id = $request->input('category_id');

            $product->save();

             
            return redirect('/product');

     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Products::find($id);
        return view('backend.product.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Products::find($id);
        $category = Category::all();
        // return view('backend.product.detail', compact('product', 'category'));
        return view('backend.product.edit', ['product' => $product, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
            'category_id' => 'required',
        ]);

         $product = Products::find($id);
         if($request->has('gambar')){
            $path = "/gambar/";
            File::delete(public_path($path . $product->gambar));
             $namagambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('gambar'), $namagambar);
            $product->gambar = $namagambar;
         }

       
        $product = Products::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->gambar = $namagambar;
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');

        $product->save();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $product = Products::find($id);
        $path = "/gambar/";
        File::delete(public_path($path . $product->gambar));
        $product->delete();
        return redirect('/product');
    }
}
