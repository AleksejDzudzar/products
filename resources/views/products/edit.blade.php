@extends('layout.app')

@section('content')
    <x-sidebar/>

    <div class="container mt-4">
        <h2>Edit Product</h2>

        <form class="row g-3 mb-4" method="POST" action="{{ route('product.update', $product->id) }}">
            @csrf
            @method('PUT')

            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Product Name" id="name" name="name" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="col-md-4">
                <input type="number" class="form-control" placeholder="Price" id="price" name="price" value="{{ old('price', $product->price) }}" required>
            </div>

            <div class="col-md-4">
                <input type="number" class="form-control" placeholder="Sale Price" id="sale_price" name="sale_price" value="{{ old('sale_price', $product->sale_price) }}">
            </div>

            <div class="col-md-4">
                <select class="form-control" name="category_id" required>
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Slug" id="slug" name="slug" value="{{ old('slug', $product->slug) }}">
            </div>

            <div class="col-md-4">
                <textarea class="form-control" placeholder="Attributes" id="attributes" name="attributes">{{ old('attributes', $product->attributes) }}</textarea>
            </div>

            <div class="col-md-4">
                <textarea class="form-control" placeholder="Description" id="description" name="description">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </form>
    </div>
@endsection
