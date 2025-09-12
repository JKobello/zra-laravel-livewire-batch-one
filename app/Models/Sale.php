<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'invoice_number',
        'customer_name',
        'sale_date',
        'total_amount',
        'discount',
        'tax',
        'net_amount',
        'payment_status',
        'payment_method',
        'notes'
    ];
}