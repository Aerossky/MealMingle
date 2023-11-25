<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjangs';

    protected $fillable = [
      'total_harga',
      'note_pesanan',
      'user_id',
      'keranjang_item_id',
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
