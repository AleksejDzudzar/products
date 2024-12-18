@extends('layout.layout')

@section('content')
    <style>
        .hero {
            height: 973px;
            background: url('/images/hero2-image.jpeg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 2rem;
            flex-direction: column;
        }

        .hero h1 {
            color: white;
            font-size: 6rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            margin-bottom: 30px;
        }

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            max-width: 65%;
            margin: 20px auto;
        }


        .search-container select {
            padding: 10px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            width: 200px;
        }

        .search-container input {
            padding: 10px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            width: 100%;
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #fff;
            color: #333;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .products-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            justify-content: center;
            padding: 20px;
            margin: 0 auto;
            max-width: 1200px;
        }

        .products-container a {
            text-decoration: none;
        }

        .product-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 16px;
            text-align: center;
            background-color: #fff;
            transition: transform 0.3s ease;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-details {
            margin-top: 10px;
            text-align: left;
        }

        .product-name {
            font-size: 24px;
            color: #245288;
            font-weight: bold;
            margin: 0;
        }

        .product-category {
            font-size: 16px;
            color: #245288;
            margin-top: 5px;
        }

        .product-price {
            font-size: 24px;
            color: #245288;
            font-weight: bold;
            margin-top: 10px;
        }

        .cart-btn {
            background-color: #245288;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cart-btn i {
            margin-right: 5px;
        }

    </style>


    <section class="hero">
        <h1>VAŠA OMILJENA ŠOLJICA</h1>
    </section>

    <div class="search-container">
        <form action="{{ route('product.search') }}" method="GET" style="display: flex; gap: 10px; width: 100%;">
            <select name="category">
                <option value="">Sve kategorije</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <input type="text" name="query" value="{{ request('query') }}" placeholder="Pretraži...">
            <select name="sort">
                <option value="">Sortiraj</option>
                <option value="price-asc" {{ request('sort') == 'price-asc' ? 'selected' : '' }}>Od najjeftinijih</option>
                <option value="price-desc" {{ request('sort') == 'price-desc' ? 'selected' : '' }}>Od najskupljih</option>
            </select>
        </form>
    </div>


    <div class="products-container">
        @foreach($products as $product)
            <a href="{{ route('product.show', $product->id) }}" class="product-link">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/solja2.png') }}" alt="Šolja"/>
                    </div>

                    <div class="product-details">
                        <h3 class="product-name">{{$product->name}}</h3>
                        <p class="product-category">{{ $product->category ? $product->category->name : 'No category' }}</p>
                        <p class="product-price">{{$product->price}} RSD</p>
                    </div>
                    <div class="product-cart">
                        <button class="cart-btn">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>

                </div>
            </a>
        @endforeach
    </div>
@endsection
