<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('purchases.index', [
            'purchases' => Purchase::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('purchases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // 'supplier_id' => 'required|exists:suppliers,id',
            'invoice_number' => 'required|string|max:255',
            'purchase_order_number' => 'required|string|max:255',
            'status' => 'required|in:pending,approved,completed,cancelled',
            'payment_status' => 'required|in:unpaid,partial,paid',
            'payment_method' => 'nullable|string|max:255',
            'currency' => 'nullable|string|max:10',
            'total_amount' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'tax' => 'nullable|numeric',
        ]);

        Purchase::create($request->only([
            // 'supplier_id',
            'invoice_number',
            'purchase_order_number',
            'status',
            'payment_status',
            'payment_method',
            'currency',
            'total_amount',
            'discount',
            'tax',
        ]));

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase created successfully.');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase): View
    {
        return view('purchases.show', ['purchase' => $purchase]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase): View
    {
        return view('purchases.edit', ['purchase' => $purchase]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase): RedirectResponse
    {
        $request->validate([
            // 'supplier_id' => 'required|exists:suppliers,id',
            'invoice_number' => 'required|string|max:255',
            'purchase_order_number' => 'required|string|max:255',
            'status' => 'required|in:pending,approved,completed,cancelled',
            'payment_status' => 'required|in:unpaid,partial,paid',
            'payment_method' => 'nullable|string|max:255',
            'currency' => 'nullable|string|max:10',
            'total_amount' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'tax' => 'nullable|numeric',
        ]);

        $purchase->update($request->only([
            // 'supplier_id',
            'invoice_number',
            'purchase_order_number',
            'status',
            'payment_status',
            'payment_method',
            'currency',
            'total_amount',
            'discount',
            'tax',
        ]));

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase): RedirectResponse
    {
        $purchase->delete();

        return redirect()->route('purchases.index')
            ->with('success', 'Purchase deleted successfully.');
    }
}
