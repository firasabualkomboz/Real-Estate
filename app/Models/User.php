<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'type',
        'phone',
        'address',
        'document'
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
    ];

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function estate()
    {
        return $this->hasMany(Estate::class, 'owner_id', 'id');
    }

    public function contract()
    {
        return $this->hasMany(Contract::class , 'tenant_id' , 'id');
    }
    public function support()
    {
        return $this->hasMany(Support::class);
    }
    public function getImageUrlAttribute()
    {
        if (empty($this->document)) {
            return asset('admin_files/assets/img/backgrounds/02.png');
        }
        return asset('uploads/' . $this->document);
    }

    public function apartment()
    {
        return $this->hasMany(Apartment::class , 'owner_id' , 'id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
