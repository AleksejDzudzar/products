@extends('layout.app')

@section('content')
    <x-sidebar/>

    <div class="container mt-4">
        <h2>Add New Product</h2>

        <form class="row g-3 mb-4" method="POST" action="{{ route('product.store') }}">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" placeholder="Product Name" id="name" name="name" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="price">Price (RSD)</label>
                    <input type="number" class="form-control" placeholder="Price" id="price" name="price" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" placeholder="Slug" id="slug" name="slug" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="sale_price">Sale Price (RSD)</label>
                    <input type="number" class="form-control" placeholder="Sale Price" id="sale_price" name="sale_price" step="0.01">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="attributes">Attributes</label>
                    <input type="text" class="form-control" placeholder="Attributes (e.g. color, size)" id="attributes" name="attributes">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" placeholder="Description" id="description" name="description" rows="4"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id" required>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
@endsection
