<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'rent', 'property_id', 'owner_id', 'area',
        'commission', 'description', 'location', 'notes', 'estate_age', 'rooms', '
        bedrooms', 'bathrooms', 'images' , 'status'];

    protected $casts = [
        'images' => 'json'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageUrlAttribute()
    {
        if (empty($this->image)) {
            return asset('admin_files/assets/img/backgrounds/02.png');
        }
        return asset('uploads/' . $this->images);
    }

    public function appointment()
    {
        return $this->hasMany(Estate::class);
    }

    public function apartment()
    {
        return $this->hasMany(Apartment::class);
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany

    {
        return $this->belongsToMany(Tag::class, 'estates_tags', 'estate_id', 'tag_id', 'id', 'id');
    }


    public function contract()
    {
        return $this->hasMany(Contract::class , 'estate_id' , 'id');
    }

}
