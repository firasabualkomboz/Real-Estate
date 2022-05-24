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
        return $this->hasMany(Apartment::class);
    }
}
