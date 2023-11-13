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
      'foto_produk',
      'tenant_id',
    ];

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
}
