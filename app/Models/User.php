<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'jenis_kelamin',
        'alamat',
        'universitas_id',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function universitas()
    {
        return $this->belongsTo(Universitas::class);
    }

    public function tenant()
    {
        return $this->hasMany(Tenant::class);
    }

    public function ulasan_tenant()
    {
        return $this->hasMany(UlasanTenant::class);
    }

    public function riwayat_pesanan()
    {
        return $this->hasMany(RiwayatPesanan::class);
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }
}
