<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanTenant extends Model
{
    use HasFactory;

    protected $table = 'ulasan_tenants';

    protected $fillable = [
      'ulasan',
      'tenant_id',
      'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }
}
