<?php
/*
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
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:20|unique:products,code',
                'unit_price' => 'required|numeric',
                'stock' => 'required|integer',
                'type' => 'required|string|max:50',
                'description' => 'nullable|string',
            ]);

            Product::create($request->only([
                'name', 'code', 'unit_price', 'stock', 'type', 'description'
            ]));

            return redirect()->route('products.index')
                ->with('success', 'Product created successfully.');
        } catch(\Exception $e) {
            return redirect()->back()->with("error", "Validation failed. ".$e->getMessage());
        }
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
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'code' => 'required|string|max:20|unique:products,code,' . $product->id,
                'unit_price' => 'required|numeric',
                'stock' => 'required|integer',
                'type' => 'required|string|max:50',
                'description' => 'required|string',
            ]);

            $product->update($request->only([
                'name', 'code', 'unit_price', 'stock', 'type', 'description'
            ]));

            return redirect()->route('products.index')
                ->with('success', 'Product updated successfully.');
        } catch(\Exception $e) {
            return redirect()->back()->with("error", "Validation failed. ".$e->getMessage());
        }

    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
*/
