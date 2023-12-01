<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KeranjangItem extends Model
{
    use HasFactory;

    protected $table = 'keranjang_items';

    protected $fillable = [
      'jumlah',
      'note_item',
      'keranjang_id',
      'menu_id',
    ];

    public function keranjang(){
        return $this->belongsTo(Keranjang::class);
    }

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
