<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Universitas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'universitas';

    protected $fillable = [
        'universitas',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
