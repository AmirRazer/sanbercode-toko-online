@extends('backend.master')

@section('content')
    {{-- //buatkan untuk halaman index untuk order item --}}
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Order Item</h6>
        <a href="/order-item/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Product ID</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($OrderItem as $key=>$value)
                    <tr>
                        <td>{{ $key + 1 }}</th>
                        <td>{{ $value->user_id }}</td>
                        <td>{{ $value->product_id }}</td>
                        <td>{{ $value->quantity }}</td>
                        <td>{{ $value->price }}</td>
                        <td>
                            <form action="/order-item/{{ $value->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="/order-item/{{ $value->id }}" class="btn btn-info">Show</a>
                                <a href="/order-item/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    @endsection
