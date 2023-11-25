<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangItem extends Model
{
    use HasFactory;

    protected $table = 'keranjang_items';

    protected $fillable = [
      'jumlah',
      'harga_item',
      'note_item',
      'menu_id',
      'tenant_id',
      'keranjang_id',
    ];
}
