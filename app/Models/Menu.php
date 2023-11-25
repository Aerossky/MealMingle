<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
      'nama_makanan',
      'deskripsi',
      'harga_produk',
      'hari',
      'foto_produk',
      'tenant_id',
      'kategori_id',
    ];

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
}
