<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjangs';

    protected $fillable = [
      'jumlah',
      'total_harga',
      'user_id',
      'menu_id',
      'tenant_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
