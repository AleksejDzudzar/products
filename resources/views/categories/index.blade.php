@extends('layout.app')

@section('content')
    <x-sidebar/>

    <div class="container mt-4">
        <h2 class="mb-4">Manage Categories</h2>

        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add New Category +</a>

        <div class="row mb-3">
            @foreach($categories as $category)
                <div class="col-md-3 mb-3">
                    <div class="input-group">
                        <input type="hidden" name="categories[{{ $loop->index }}][id]" value="{{ $category->id }}">
                        <input type="text" class="form-control" name="categories[{{ $loop->index }}][name]"
                               value="{{ $category->name }}" required>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </a>

                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-success">Save Changes</button>
        <a href="#" class="btn btn-secondary">Discard</a>
    </div>
@endsection
