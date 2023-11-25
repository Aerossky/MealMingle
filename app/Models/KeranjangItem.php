<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function keranjang(){
        return $this->belongsTo(Keranjang::class);
    }

    public function menu(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class);
    }
}
