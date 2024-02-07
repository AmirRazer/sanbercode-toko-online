@extends('backend.master')
@section('content')
    {{-- tampil edit halaman produk --}}
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Edit Produk</h6>
        <form action="/product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                    @error('name')
                        <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                    @error('price')
                        <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
                    @error('stock')
                        <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="formFileMultiple" class="col-form-label col-sm-2">Gambar</label>
                <div class="col-sm-10">
                    <img src="{{ asset('/gambar/' . $product->gambar) }}" alt="zz" width="200px">
                    <input class="form-control" type="file" id="gambar" name="gambar">
                    @error('gambar')
                        <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            {{-- edit category_id --}}
            <div class="row mb-3">
                <label for="floatingTextarea" class="col-sm col-form-label">Kategori</label>
                <div class="form-floating col-sm-10">
                    <select class="form-select" id="category_id" name="category_id">
                        @foreach ($category as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="floatingTextarea" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="form-floating col-sm-10">
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description">{{ $product->description }}</textarea>
                    @error('description')
                        <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <a href="/product" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
