@extends('backend.master')
{{-- 
@section('title')
    Product --}}
@section('content')
    <div class="col-sm-12 ">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah Kategori</h6>
            <form action="/categori" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
