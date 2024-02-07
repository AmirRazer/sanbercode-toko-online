@extends('backend.master')



@section('content')
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Kategori</h6>
        <a href="/product/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">harga</th>
                    <th scope="col">stock</th>

                    <th scope="col">Kategori</th>
                    <th scope="col">gambar</th>



                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($product as $key=>$value)
                    <tr>
                        <td>{{ $key + 1 }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ Str::limit($value->description, 50) }}</td>
                        <td>{{ $value->price }}</td>
                        <td>{{ $value->stock }}</td>
                        <td>{{ $value->category->name }}</td>
                        <td><img src="{{ asset('/gambar/' . $value->gambar) }}" alt="zz" width="70px"></td>


                        <td>

                            <form action="/product/{{ $value->id }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a href="/product/{{ $value->id }}" class="btn btn-info">Show</a>
                                <a href="/product/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
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
    </div>
@endsection
