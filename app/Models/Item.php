<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'stock_code',
        'name',
        'description',
        'price',
        'quantity',
        'model_no',
        'user_id',
        'delivery_date',
        'model_no2',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
