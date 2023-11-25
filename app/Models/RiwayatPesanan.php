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
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }
}
