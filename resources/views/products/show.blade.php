@extends('layout.layout')

@section('content')
    <style>

        .product-detail-container {
            margin: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .product-detail {
            display: flex;
            flex-direction: row;
            gap: 20px;
            max-width: 1200px;
            width: 100%;
        }

        .product-image img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 10px;
        }

        .product-info {
            max-width: 600px;
            text-align: left;
        }

        .product-info h1 {
            font-size: 2.5rem;
            color: #245288;
            margin-bottom: 15px;
        }

        .product-info p {
            color: #245288;

            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #245288;
        }

        .cart-btn i {
            margin-right: 5px;
        }

        .cart-btn {
            background-color: white;
            color: #245288;
            border: 1px solid #245288;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 0;
        }

        .shop-btn {
            background-color: #245288;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 0;
        }


        .quantity-and-cart {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
        }

        .quantity-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            background-color: #245288;
            color: white;
            border: none;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        #quantity {
            width: 60px;
            text-align: center;
            font-size: 18px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }


    </style>
    <script>
        document.getElementById('increase').addEventListener('click', function () {
            var quantityInput = document.getElementById('quantity');
            var quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
            document.getElementById('quantityInput').value = quantity + 1;
        });

        document.getElementById('decrease').addEventListener('click', function () {
            var quantityInput = document.getElementById('quantity');
            var quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
                document.getElementById('quantityInput').value = quantity - 1;
            }
        });


    </script>


    <div class="product-detail-container">
        <div class="product-detail">
            <div class="product-image">
                <img src="{{ asset('images/solja2.png') }}" alt="{{ $product->name }}">
            </div>

            <div class="product-info">
                <h1>{{ $product->name }}</h1>
                <p><strong>Opis:</strong> {{ $product->description }}</p>
                <p><strong>Trajanje:</strong> 1000 pranja</p>
                <p><strong>Boja:</strong> Bela sa crnom rucicom</p>
                <p><strong>Materijal:</strong> Keramika</p>
                <p class="product-price">{{ $product->price }} RSD</p>

                <div class="quantity-and-cart">
                    <div class="quantity-container">
                        <button id="decrease" class="quantity-btn">-</button>
                        <input type="number" id="quantity" value="1" min="1">
                        <button id="increase" class="quantity-btn">+</button>
                    </div>

                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="quantity" id="quantityInput" value="1">

                        <button type="submit" class="cart-btn">
                            Dodaj u korpu
                        </button>
                    </form>
                    <button class="shop-btn">
                        Poruci odmah
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
