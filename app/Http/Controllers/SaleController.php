<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $sales = Sale::latest()->paginate(10);
    return view('sales.index', compact('sales'));
}

public function create()
{
    return view('sales.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'invoice_number' => 'required|unique:sales',
        'customer_name' => 'required|string',
        'sale_date' => 'required|date',
        'total_amount' => 'required|numeric',
        'discount' => 'nullable|numeric',
        'tax' => 'nullable|numeric',
        'net_amount' => 'required|numeric',
        'payment_status' => 'required|in:Paid,Pending,Partial',
        'payment_method' => 'nullable|string',
        'notes' => 'nullable|string',
    ]);

    Sale::create($validated);
    return redirect()->route('sales.index')->with('success', 'Sale recorded successfully.');
}

public function show(Sale $sale)
{
    return view('sales.show', compact('sale'));
}

public function edit(Sale $sale)
{
    return view('sales.edit', compact('sale'));
}

public function update(Request $request, Sale $sale)
{
    $validated = $request->validate([
        'invoice_number' => "required|unique:sales,invoice_number,{$sale->id}",
        'customer_name' => 'required|string',
        'sale_date' => 'required|date',
        'total_amount' => 'required|numeric',
        'discount' => 'nullable|numeric',
        'tax' => 'nullable|numeric',
        'net_amount' => 'required|numeric',
        'payment_status' => 'required|in:Paid,Pending,Partial',
        'payment_method' => 'nullable|string',
        'notes' => 'nullable|string',
    ]);

    $sale->update($validated);
    return redirect()->route('sales.index')->with('success', 'Sale updated successfully.');
}

public function destroy(Sale $sale)
{
    $sale->delete();
    return redirect()->route('sales.index')->with('success', 'Sale deleted.');
}
    // Removed duplicate resource methods to avoid redeclaration errors.
    }
    $validated = $request->validate([
        'invoice_number' => "required|unique:sales,invoice_number,{$sale->id}",
        'customer_name' => 'required|string',
        'sale_date' => 'required|date',
        'total_amount' => 'required|numeric',
        'discount' => 'nullable|numeric',
        'tax' => 'nullable|numeric',
        'net_amount' => 'required|numeric',
        'payment_status' => 'required|in:Paid,Pending,Partial',
        'payment_method' => 'nullable|string',
        'notes' => 'nullable|string',
    ]); 
