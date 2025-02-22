<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        Category::create($attributes);
        return redirect('/categories');
    }
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, Category $category){

        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);
        return redirect('/categories');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }

}
