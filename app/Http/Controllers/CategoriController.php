<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $categori = DB::table('categories')->get();
        return view('backend.kategori.index', compact('categori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $query = DB::table('categories')->insert([
            "name" => $request["name"]
        ]);
          return redirect('/categori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categori = DB::table('categories')->where('id',$id)->first();
        return view('backend.kategori.show', compact('categori'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = DB::table('categories')->where('id',$id)->first();
        return view('backend.kategori.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $query = DB::table('categories')
        ->where('id',$id)
        ->update([
            'name'=> $request['name']
        ]);
        return redirect('/categori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('categories')->where('id',$id)->delete();
        return redirect('/categori');
    }
}
