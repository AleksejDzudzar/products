<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->paginate(5);
        return view('orders.index',compact('orders'));
    }
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }
}
