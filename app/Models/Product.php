<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'price',
        'stock',
        'stock_defective',
        'code',
        'size_type',
        'color',
        'barcode'
    ];

    public function soldProducts(){
        return $this->hasMany(SoldProduct::class);
    }

}
