<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPesanan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pesanans';

    protected $fillable = [
        'total_harga',
        'payment_type',
        'transaction_status',
        'user_id',
        'order_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function riwayat_pesanan_item()
    {
        return $this->hasMany(RiwayatPesananItem::class);
    }
}
