@extends('layout.app')

@section('content')
    <x-sidebar/>
    <div class="container">
        <h1>Orders</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>
                        <a href="{{ route('orders.show', $order) }}">{{ $order->id }}</a>
                    </td>
                    <td>{{ $order->first_name }} | {{ $order->email }}</td>
                    <td>cena</td>
                    <td>status</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
