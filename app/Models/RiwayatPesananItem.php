<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RiwayatPesananItem extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pesanan_items';

    protected $fillable = [
      'jumlah',
      'harga_item',
      'riwayat_pesanan_id',
    ];

    public function riwayat_pesanan(){
        return $this->belongsTo(RiwayatPesanan::class);
    }

    public function menu(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class);
    }
}
