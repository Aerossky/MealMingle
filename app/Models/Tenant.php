<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $table = 'tenants';

    protected $fillable = [
      'nama_tenant',
      'deskripsi',
      'user_id',
      'foto_tenant',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ulasan_tenant(){
        return $this->hasMany(UlasanTenant::class);
    }

    public function menu(){
        return $this->hasMany(Menu::class);
    }

    public function riwayat_pesanan(){
        return $this->hasMany(RiwayatPesanan::class);
    }

    public function keranjang(){
        return $this->hasMany(Keranjang::class);
    }
}
