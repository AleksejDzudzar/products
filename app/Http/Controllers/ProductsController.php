<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.products', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories'));

    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id' => 'required|integer|exists:categories,id',
            'attributes' => 'required',
            'description' => 'required|string|max:255',
        ]);

        Product::create($attributes);

        return redirect('/')->with('success', 'Proizvod uspešno dodat!');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product','categories'));

    }

    public function update(Request $request, Product $product)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'sale_price' => 'nullable|numeric',
            'category_id' => 'required|integer|exists:categories,id',
            'attributes' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $product->update($attributes);

        return redirect('/')->with('success', 'Proizvod uspešno ažuriran!');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/');
    }

}
