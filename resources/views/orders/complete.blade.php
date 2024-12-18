@extends('layout.layout')

@section('content')
    <style>
        .order-complete-container {
            margin-top: 100px;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .order-complete-header {
            font-size: 36px;
            color: #28a745;
            font-weight: bold;
        }

        .order-complete-subheader {
            font-size: 20px;
            color: #555;
            margin-top: 10px;
        }

        .order-details {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        .order-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 300px;
            min-height: 250px;
            text-align: left;
        }

        .order-card h5 {
            color: #245288;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .order-card p {
            font-size: 16px;
            color: #333;
            margin: 8px 0;
        }

        .order-card .bold {
            font-weight: bold;
        }

        .order-summary {
            margin-top: 40px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .order-summary .summary-header {
            font-size: 20px;
            color: #245288;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .order-summary .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .order-summary .summary-item .summary-item-name {
            font-size: 16px;
            color: #333;
        }

        .order-summary .summary-item .summary-item-price {
            font-weight: bold;
            color: #245288;
        }

        .total-price {
            font-size: 18px;
            font-weight: bold;
            color: #245288;
            padding-top: 15px;
        }

    </style>

    <div class="order-complete-container">
        <div class="order-complete-header">Hvala Vam na porudžbini!</div>
        <div class="order-complete-subheader">Vaša porudžbina je uspešno obrađena.</div>

        <div class="order-details">
            <div class="order-card">
                <h5>Kontakt informacije</h5>
                <p><span class="bold">Ime i Prezime:</span> {{ $order->first_name }} {{ $order->last_name }}</p>
                <p><span class="bold">Email:</span> {{ $order->email }}</p>
                <p><span class="bold">Telefon:</span> {{ $order->phone }}</p>
            </div>

            <div class="order-card">
                <h5>Adresa isporuke</h5>
                <p><span class="bold">Ulica i broj:</span> {{ $order->street }}</p>
                <p><span class="bold">Grad:</span> {{ $order->city }}</p>
                <p><span class="bold">Poštanski broj:</span> {{ $order->postal_code }}</p>
                @if($order->company)
                    <p><span class="bold">Kompanija:</span> {{ $order->company_name }}</p>
                    <p><span class="bold">PIB:</span> {{ $order->pib }}</p>
                @endif
            </div>
        </div>

        <div class="order-summary">
            <div class="summary-header">Sažetak porudžbine</div>
            @foreach($order->items as $item)
                <div class="summary-item">
                    <div class="summary-item-name">{{ $item->product_name }} x {{ $item->quantity }}</div>
                    <div class="summary-item-price">{{ number_format($item->price, 2) }} RSD</div>
                </div>
            @endforeach
            <div class="summary-item">
                <div><strong>Ukupno:</strong></div>
                <div class="summary-item-price">{{ number_format($order->items->sum(function($item) { return $item->price * $item->quantity; }), 2) }} RSD</div>
            </div>
        </div>

        <a href="{{ route('home') }}">/</a>
    </div>
@endsection
