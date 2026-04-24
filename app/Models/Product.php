<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'cooperative_id',
        'title',
        'description',
        'images',
        'price',
        'category',
        'stock_quantity',
        'weight_size_options',
    ];

    protected $casts = [
        'images' => 'array',
        'weight_size_options' => 'array',
        'price' => 'decimal:2',
    ];

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }
}