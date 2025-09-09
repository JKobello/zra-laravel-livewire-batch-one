<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{

    // Call for creationd form
    public function create(): View {
        return view('products.create');
    }

    // Call for submitting/saving filled form data
    public function store(Request $request): RedirectResponse
    {

        $product = new Product();
        $product->name = $request->input('name');
        $product->code = $request->input('code');
        $product->unit_price = $request->input('unit_price');
        $product->stock = $request->input('stock');
        $product->type = $request->input('type');
        $product->discription = $request->input('discription');
        $product->save();

        return redirect('products');
    }

    // Call for existing record form
    public function edit(): View {
        return view('products.edit');
    }

    // Call for submitting/saving edited recod form data
    public function update(): View {
    }


    /**
     * Show the profile for a given product.
     */
    public function show(string $id): View
    {
        return view('products.show', [
            'product' => Product::findOrFail($id)
        ]);
    }


    /**
     * Show the profile for a given product.
     */
    public function index(): View
    {
        return view('products', [
            'products' => ["name" => "Kobbs"] // Product::all()
        ]);
    }
}
