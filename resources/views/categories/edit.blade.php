@extends('layout.app')

@section('title', 'Edit Category')

@section('content')
    <x-sidebar/>

    <div class="container">
        <h2 class="text-center">Edit Category</h2>
        <form action="{{ route('categories.update', $category->id) }}" method="POST" class="mx-auto" style="max-width: 500px;">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
            </div>

            <div class="form-group mt-3">
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-3">Update Category</button>
        </form>
    </div>
@endsection
