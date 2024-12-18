@extends('layout.layout')

@section('content')
    <style>
        .checkout-container {
            margin-top: 100px;
            display: flex;
            justify-content: space-between;
            padding: 50px 5%;
            background-color: #f8f9fa;
        }

        .checkout-form {
            width: 60%;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .checkout-form h2 {
            font: 24px;
            color: #245288;
        }

        .checkout-form h3 {
            color: #245288;
            font-size: 24px;
        }

        .checkout-form input,
        .checkout-form select {
            font-size: 16px;
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Stilizacija za checkbox i etiketu u horizontalnom rasporedu */
        .company-checkbox {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .company-checkbox h2 {
            font-size: 20px;
            color: #245288;
        }

        .cart-summary {
            width: 35%;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .cart-summary h3 {
            color: #245288;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .cart-item-name {
            color: #333;
        }

        .cart-item-price {
            font-weight: bold;
            color: #245288;
        }

        .checkout-btn {
            background-color: #245288;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
        }
    </style>

    <div class="checkout-container">
        <div class="checkout-form">
            <h2>Tvoje informacije</h2>
            <form action="{{ route('order.store') }}" method="POST">
                @csrf
                <input type="text" name="first_name" id="first_name" placeholder="Ime" required>
                <input type="text" name="last_name" id="last_name" placeholder="Prezime" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="text" name="phone" id="phone" placeholder="Broj telefona" required>

                <h3>Informacije za isporuku</h3>
                <input type="text" name="city" id="city" placeholder="Grad" required>
                <input type="text" name="street" id="street" placeholder="Ulica i broj" required>
                <input type="text" name="postal_code" id="postal_code" placeholder="Postanski broj" required>

                <div class="company-checkbox">
                    <h2>Nastupam kao pravno lice</h2>
                    <input type="checkbox" name="company" id="company">
                </div>

                <div id="company-fields" style="display:none;">
                    <input type="text" name="company_name" id="company_name" placeholder="Ime kompanije">
                    <input type="text" name="pib" id="pib" placeholder="PIB">
                </div>

                <button type="submit" class="checkout-btn">Završi poručivanje</button>
            </form>
        </div>

        <div class="cart-summary">
            <h3>Artikli</h3>
            @if(session('cart') && count(session('cart')) > 0)
                @foreach(session('cart') as $id => $item)
                    <div class="cart-item">
                        <div class="cart-item-name">
                            <p>{{ $item['name'] }} <small>({{ $item['quantity'] }} x {{ $item['price'] }} RSD)</small>
                            </p>
                        </div>
                        <div class="cart-item-price">
                            {{ number_format($item['quantity'] * $item['price'], 2) }} RSD
                        </div>
                    </div>
                @endforeach

                <hr>
                <div class="cart-item">
                    <div><strong>UKUPNO:</strong></div>
                    <div>
                        {{ number_format(array_sum(array_map(function($item) {
                            return $item['quantity'] * $item['price'];
                        }, session('cart'))), 2) }} RSD
                    </div>
                </div>
            @else
                <p>Vaša korpa je prazna.</p>
            @endif
        </div>
    </div>

    <script>
        document.getElementById('company').addEventListener('change', function () {
            const companyFields = document.getElementById('company-fields');
            if (this.checked) {
                companyFields.style.display = 'block';
            } else {
                companyFields.style.display = 'none';
            }
        });
    </script>
@endsection
