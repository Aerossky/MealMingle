<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'menus';

    protected $fillable = [
      'nama_makanan',
      'deskripsi',
      'harga_produk',
      'hari',
      'foto_produk',
      'tenant_id',
    ];

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }

    public function kategori(): BelongsToMany
    {
        return $this->belongsToMany(Kategori::class, 'menu_kategori', 'menu_id', 'kategori_id');
    }

    public function keranjang_item(): BelongsToMany
    {
        return $this->belongsToMany(KeranjangItem::class);
    }

    public function riwayat_pesanan_item(): BelongsToMany
    {
        return $this->belongsToMany(RiwayatPesananItem::class);
    }
}
