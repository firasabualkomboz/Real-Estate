<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable =
        ['name', 'description', 'features', 'year_built', 'space',
            'rooms', 'bathroom', 'on_floor', 'image', 'property_id', 'estate_id'];

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
        //   return ($this->image);
        return asset('uploads/' . $this->image);
    }


}
