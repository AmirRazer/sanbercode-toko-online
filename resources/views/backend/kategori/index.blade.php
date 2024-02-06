@extends('backend.master')



@section('content')
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Kategori</h6>
        <a href="/categori/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nomer</th>
                    <th scope="col">Nama</th>

                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categori as $key=>$value)
                    <tr>
                        <td>{{ $key + 1 }}</th>
                        <td>{{ $value->name }}</td>

                        <td>

                            <form action="/categori/{{ $value->id }}" method="POST">
                                @csrf
                                @method('DELETE')

                                {{-- <a href="/categori/{{ $value->id }}" class="btn btn-info">Show</a> --}}
                                <a href="/categori/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
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
