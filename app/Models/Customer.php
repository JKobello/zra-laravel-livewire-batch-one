<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Customer extends Model
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
        'company_name',
        'email',
        'phone_number',
        'account_balance',
        'country',
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';


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


}
