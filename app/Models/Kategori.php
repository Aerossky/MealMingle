<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Kategori extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'kategoris';

    protected $fillable = [
        'nama_kategori',
    ];


    public function menu(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class, 'menu_kategori', 'kategori_id', 'menu_id');
    }
}
