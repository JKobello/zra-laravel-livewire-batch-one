<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:20|unique:products,code',
            'unit_price' => 'required|numeric',
            'stock' => 'required|integer',
            'type' => 'required|string|max:50',
            'discription' => 'nullable|string',
        ]);

        Product::create($request->only([
            'name', 'code', 'unit_price', 'stock', 'type', 'discription'
        ]));

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $product): View
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product): View
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:20|unique:products,code,' . $product->id,
            'unit_price' => 'required|numeric',
            'stock' => 'required|integer',
            'type' => 'required|string|max:50',
            'discription' => 'nullable|string',
        ]);

        $product->update($request->only([
            'name', 'code', 'unit_price', 'stock', 'type', 'discription'
        ]));

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
