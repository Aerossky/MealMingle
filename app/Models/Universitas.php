<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Universitas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'universitas';

    protected $fillable = [
        'universitas_name',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    public function tenant(){
        return $this->belongsToMany(Tenant::class);
    }
}
