<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable =
        ['name', 'description', 'features', 'year_built', 'space',
            'rooms', 'bathroom', 'on_floor', 'image', 'property_id', 'estate_id', 'photos'];

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
        return $this->hasMany(Contract::class);
    }

    public function support()
    {
        return $this->hasMany(Support::class);
    }


}
