<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'code',
        'unit_price',
        'stock',
        'category_id', // Category ID
        'description',
        'mf_date',
        'photo',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';


    // /**
    //  * The primary key associated with the table.
    //  *
    //  * @var string
    //  */
    // protected $primaryKey = 'id';


    // /**
    //  * Indicates if the model's ID is auto-incrementing.
    //  *
    //  * @var bool
    //  */
    // public $incrementing = false;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'type');
    }

}
