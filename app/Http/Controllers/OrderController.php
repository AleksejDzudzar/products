<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function checkout()
    {
        return view('cart.checkout');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
            'company' => 'boolean',
            'company_name' => 'nullable|string|max:255',
            'pib' => 'nullable|string|max:255',
        ]);

        $order = Order::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'city' => $validated['city'],
            'street' => $validated['street'],
            'postal_code' => $validated['postal_code'],
            'company' => $validated['company'] ?? false,
            'company_name' => $validated['company_name'] ?? null,
            'pib' => $validated['pib'] ?? null,
        ]);

        $cart = session()->get('cart', []);
        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'product_name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'total' => $item['quantity'] * $item['price'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('order.complete')->with('success', 'Porudžbina je uspešno završena!');
    }

    public function complete()
    {
        $order = Order::with('items')->latest()->first();

        if (!$order) {
            return redirect()->route('checkout')->with('error', 'Nema podataka za prikazivanje.');
        }

        return view('orders.complete', compact('order'));
    }
}
