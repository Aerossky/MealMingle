<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiwayatPesananItem extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pesanan_items';

    protected $fillable = [
        'jumlah',
        'note_item',
        'riwayat_pesanan_id',
        'menu_id',
        'waktu_pengiriman',
    ];

    public function riwayat_pesanan()
    {
        return $this->belongsTo(RiwayatPesanan::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
