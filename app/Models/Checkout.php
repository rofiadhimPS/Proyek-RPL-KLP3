<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 
        'product_id', 
        'tanggal_pesan', 
        'lokasi_penjemputan',
        'metode_pembayaran',
        'bukti_transfer',
        'is_paid',
    ];
}
