<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home()
    {
        $products = Product::paginate(3);


        return view('home', compact('products'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');
        $sort = $request->input('sort');

        $products = Product::query()
            ->when($categoryId, function ($q) use ($categoryId) {
                return $q->where('category_id', $categoryId);
            })
            ->when($query, function ($q) use ($query) {
                return $q->where('name', 'like', '%' . $query . '%');
            })
            ->when($sort, function ($q) use ($sort) {
                if ($sort === 'price-asc') {
                    return $q->orderBy('price', 'asc');
                } elseif ($sort === 'price-desc') {
                    return $q->orderBy('price', 'desc');
                }
            })
            ->paginate(9);

        $categories = Category::all();

        return view('shop', compact('products', 'categories', 'query', 'categoryId', 'sort'));
    }


    public function shop()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('shop', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::FindOrFail($id);
        return view('products.show', compact('product'));
    }

    public function about()
    {
        return view('about');
    }

    public function index()
    {
        $products = Product::all();
        return view('products.products', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));

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
        return view('products.edit', compact('product', 'categories'));

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
