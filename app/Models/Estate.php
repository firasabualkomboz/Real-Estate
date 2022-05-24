<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'type', 'floors', 'apartments', 'owner_id', 'image', 'location'];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }


    public function getImageUrlAttribute()
    {
        if (empty($this->image)) {
            return asset('admin_files/assets/img/backgrounds/02.png');
        }
        //   return ($this->image);
        return asset('uploads/' . $this->image);
    }


    public function appointment()
    {
        return $this->hasMany(Estate::class);
    }

    public function apartment()
    {
        return $this->hasMany(Apartment::class);
    }


}
