<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPengiriman extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pengiriman';
    protected $guarded = [];

    public function menu()
    {
        return $this->belongsToMany(Menu::class, 'menu_jadwal_pengiriman', 'jadwal_pengiriman_id', 'menu_id');
    }
}
