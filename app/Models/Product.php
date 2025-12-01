<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// app/Models/Product.php

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'stock',
        'description',
    ];
}
