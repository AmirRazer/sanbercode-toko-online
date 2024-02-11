@extends('backend.master')
@section('content')

{{-- saya ingin membuat halaman add chart dengan jumlah dan total harga --}}
<div class="bg-light rounded h-100 p-4">
    <h6 class="mb-4">Tambah Keranjang</h6>
    <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product_id">Nama Produk</label>
            <select name="product_id" id="product_id" class="form-control">
                @foreach ($product as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="user_id">Nama User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($user as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control">
        </div>
        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" name="total_harga" id="total_harga" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

    
@endsection