<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'kecepatan', 'harga'];

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
