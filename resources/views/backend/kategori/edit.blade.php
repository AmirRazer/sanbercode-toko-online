@extends('backend.master')
@section('content')
    <div class="col-sm-12 ">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit
                {{-- buatkan form action --}}
                <form action="/categori/{{ $categories->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $categories->name }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
        </div>
    </div>
@endsection
