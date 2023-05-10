<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = ['image', 'nama', 'sku', 'desc', 'kategori', 'harga'];
}
