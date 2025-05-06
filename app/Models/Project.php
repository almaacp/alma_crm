<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['nama_lead', 'produk', 'status', 'tanggal', 'manager_approval', 'customer_id'];

    // Relasi ke customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relasi ke lead jika diperlukan
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}