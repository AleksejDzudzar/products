@extends('layout.app')

@section('title', 'Products')

@section('content')
    <x-sidebar/>

    <h2 class="mb-4">Manage Products</h2>

    <form class="row g-3 mb-4" method="POST" action="{{ route('product.store') }}">
        @csrf
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Product Name" id="name" name="name" required>
        </div>
        <div class="col-md-4">
            <input type="number" class="form-control" placeholder="Price" id="price" name="price" required>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Category" id="category" name="category" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/products/create" class="btn btn-primary rounded">Add New Product+</a>
        </div>


    </form>

    <div class="table-container">
        <table class="table table-bordered">
            <thead class="table-primary">
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }} RSD</td>
                    <td>{{ $product->category ? $product->category->name : 'No category' }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
