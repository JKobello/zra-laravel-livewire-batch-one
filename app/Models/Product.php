<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'code',
        'unit_price',
        'quantity',
        'type',
        'discription',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

}
