<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'layanan', 'status', 'tanggal_mulai', 'product_id'];

    // Relasi jika customer terkait dengan leads atau project
    public function leads()
    {
        return $this->hasMany(Lead::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}