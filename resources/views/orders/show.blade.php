@extends('layout.app')

@section('title', 'Order Details')

@section('content')
    <x-sidebar/>
    <div class="container my-4 content">
        <h2 class="mb-4">Order Details</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label>Order ID</label>
                        <input type="text" class="form-control" value="{{ $order->id }}" readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Order Date</label>
                        <input type="text" class="form-control" value="{{ $order->created_at }}" readonly>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label>Status</label>
                        <select class="form-select" name="status">
                            <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                            <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Cancelled" {{ $order->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="section-title h5">Buyer Information</div>
                    <p>{{ $order->user->name }}<br>{{ $order->user->email }}<br>{{ $order->phone }}</p>
                </div>

                <div class="mb-4">
                    <div class="section-title h5">Shipping Information</div>
                    <p>{{ $order->shipping_address }}</p>
                </div>

                <div class="mb-4">
                    <div class="section-title h5">Payment Information</div>
                    <p>Invoice: {{ $order->payment_method }}<br>Transaction ID: {{ $order->transaction_id }}</p>
                </div>

                <div class="mb-4">
                    <div class="section-title h5">Total</div>
                    <p><strong>{{ number_format($order->total, 2) }} RSD</strong></p>
                </div>

                <div class="mt-4">
                    <a href="{{ route('orders.index') }}" class="btn btn-outline-secondary">Back to Orders</a>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
