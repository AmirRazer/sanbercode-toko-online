@extends('backend.master')
@section('content')
    {{-- tampil detail halaman produk --}}
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Detail Produk</h6>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}"
                    readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="stock" name="stock" value="{{ $product->stock }}"
                    readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="formFileMultiple" class="col-form-label col-sm-2">Gambar</label>
            <div class="col-sm-10">
                <img src="{{ asset('/gambar/' . $product->gambar) }}" alt="zz" width="200px">
            </div>
        </div>
        <div class="row mb-3">
            <label for="floatingTextarea" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="form-floating col-sm-10">
                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" readonly>{{ $product->description }}</textarea>
            </div>
        </div>
        {{-- tambahkan categoey id --}}
        
        <div class="row mb-3">
            <label for="floatingTextarea" class="col-sm-2 col-form-label">Kategori</label>
            <div class="form-floating col-sm-10">
                <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $product->category->name }}" readonly>
            </div>
        </div>
        <a href="/product" class="btn btn-primary">Kembali</a>
    @endsection
