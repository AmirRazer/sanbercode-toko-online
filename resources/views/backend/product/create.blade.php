@extends('backend.master')
{{-- 
@section('title')
    Product --}}
@section('content')
    <div class="col-sm-12 ">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Product</h6>
            <form action="/product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Harga</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="price" name="price">
                        @error('price')
                            <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Stock</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="stock" name="stock">
                        @error('stock')
                            <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="formFileMultiple" class="col-form-label col-sm-2">Gambar</label>

                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="gambar" name="gambar">
                        @error('gambar')
                            <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="row mb-3">
                    <label for="floatingTextarea" class="col-sm-2 col-form-label">Deskripsi</label>

                    <div class="form-floating col-sm-10">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>

                        @error('description')
                            <div class="alert alert-danger col-sm-10">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="floatingTextarea" class="col-sm-2 col-form-label">kategori</label>
                    <div class="col-sm-10">
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example"
                            id="category_id" name="category_id">
                            <option selected>Pilih Kategori</option>
                            @forelse($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @empty
                                <option value="">Tidak ada kategori</option>
                            @endforelse


                        </select>


                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
