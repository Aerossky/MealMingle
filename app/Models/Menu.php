<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    protected $fillable = [
      'foto_produk',
      'nama_makanan',
      'deskripsi',
      'harga_produk',
      'tenant_id',
    ];

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
}
