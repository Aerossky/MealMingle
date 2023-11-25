<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tenant extends Model
{
    use HasFactory;

    protected $table = 'tenants';

    protected $fillable = [
      'nama_tenant',
      'deskripsi',
      'foto_tenant',
      'user_id',
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

    public function universitas(): BelongsToMany
    {
        return $this->belongsToMany(Universitas::class);
    }
}
