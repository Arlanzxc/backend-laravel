<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:categories,name|max:255'
        ]);

        $category = Category::create($validated);
        return response()->json($category, 201);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category, 200);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|unique:categories,name,' . $category->id . '|max:255'
        ]);

        $category->update($validated);
        return response()->json($category, 200);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        
        return response()->json(['message' => 'Category deleted successfully'], 200);
    }

    public function getCategoriesByProduct($productId)
    {
        $product = Product::findOrFail($productId);
        return response()->json($product->categories, 200);
    }
}
