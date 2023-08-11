<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
{
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload and storage
        $imagePath = $request->file('image')->store('product_images', 'public');

        Product::create([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'image' => 'storage/' . $imagePath,
        ]);

        return redirect()->route('admin.products.create')->with('success', 'Product added successfully!');
  }
}
