<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable =
        ['name', 'description', 'features', 'rent' , 'commission', 'space',
            'rooms', 'bathroom', 'on_floor', 'image', 'estate_id', 'photos' , 'status' , 'owner_id'];


    public function property()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function getImageUrlAttribute()
    {
        if (empty($this->image)) {
            return asset('admin_files/assets/img/backgrounds/02.png');
        }
        return asset('uploads/' . $this->image);
    }

    public function contract()
    {
        return $this->hasMany(Contract::class , 'apartment_id' , 'id');
    }

    public function support()
    {
        return $this->hasMany(Support::class);
    }

    public function owner()
    {
     return $this->belongsTo(User::class);
    }

}
