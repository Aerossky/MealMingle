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
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function keranjang_item(){
        return $this->hasMany(KeranjangItem::class);
    }
}
