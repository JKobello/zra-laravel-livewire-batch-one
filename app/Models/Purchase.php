<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
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
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'purchases';
}
