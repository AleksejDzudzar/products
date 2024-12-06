@extends('layout.app')

@section('content')
    <x-sidebar/>

    <div class="container">
        <h2 class="mb-4 text-center" >Add New Category</h2>

        <form action="{{ route('categories.store') }}" method="POST" class="mx-auto" style="max-width: 500px"; ">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="New Category" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
@endsection

