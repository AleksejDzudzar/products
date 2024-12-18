@extends('layout.layout')

@section('content')
    <style>
        .cart-container {
            margin: 100px auto;
            max-width: 1200px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }

        .cart-item {
            display: flex;
            gap: 20px;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            position: relative;
        }

        .remove-btn-container {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .remove-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        .cart-item img {
            width: 20%;
            height: auto;
            border-radius: 10px;
        }

        .cart-item-details {
            flex: 1;
            margin-right: 50px;
        }

        .cart-item h2 {
            font-size: 1.3rem;
            color: #245288;
            margin-bottom: 10px;
        }

        .cart-item p {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .cart-item .quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            background-color: #245288;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .item-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #245288;
            margin-top: 30px;
            margin-bottom: auto;
        }

        .cart-summary {
            text-align: right;
            padding: 20px 0;
        }

        .cart-summary h3 {
            font-size: 1.5rem;
            color: #245288;
        }

        .checkout-btn {
            background-color: #245288;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

    <div class="cart-container">
        @if(session('cart') && count(session('cart')) > 0)
            @foreach(session('cart') as $id => $item)
                <div class="cart-item">
                    <div class="remove-btn-container">
                        <form action="{{ route('cart.remove', $id) }}" method="GET">
                            @csrf
                            <button type="submit" class="remove-btn">Ukloni</button>
                        </form>
                    </div>
                    <img src="{{ asset('images/solja2.png') }}" alt="Slika proizvoda">

                    <div class="cart-item-details">
                        <h2>{{ $item['name'] }} <small>({{ $item['price'] }} RSD)</small></h2>
                        <p>Lorem Ipsum je simply dummy text of the printing and typesetting industry.</p>
                        <p><strong>Boja:</strong> Crna</p>
                        <div class="quantity">
                            <p><strong>Količina:</strong></p>
                            <button class="quantity-btn">-</button>
                            <span>{{ $item['quantity'] }}</span>
                            <button class="quantity-btn">+</button>
                        </div>
                    </div>

                    <div class="item-price">
                        {{ number_format($item['quantity'] * $item['price'], 2) }} RSD
                    </div>
                </div>
            @endforeach

            <div class="cart-summary">
                <h3>UKUPNO:
                    {{ number_format(array_sum(array_map(function($item) {
                        return $item['quantity'] * $item['price'];
                    }, session('cart'))), 2) }} RSD
                </h3>
                <a href="{{ route('checkout') }}">
                    <button class="checkout-btn">Nastavi sa plaćanjem</button>
                </a>
            </div>
        @else
            <p>Vaša korpa je prazna.</p>
        @endif
    </div>
@endsection
