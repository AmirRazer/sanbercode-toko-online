@extends('backend.master')

@section('content')
    {{-- //buatkan untuk halaman create untuk order item --}}
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Order Item</h6>
        <form action="{{ route('order-item.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id">
            </div>
            <div class="mb-3">
                <label for="product_id" class="form-label
                ">Product ID</label>
                <input type="text" class="form-control" id="product_id" name="product_id">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
   
    @endsection
    