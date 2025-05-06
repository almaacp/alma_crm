<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'kontak', 'alamat', 'product_id', 'status'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}