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
                    <td>{{ $order->user->name }} | {{ $order->user->email }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $orders->links() }}
    </div>
@endsection
