<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;



    protected $fillable = ['name',  'rent' ,  'property_id' , 'owner_id', 'area' ,
        'commission', 'description', 'location', 'notes', 'estate_age' , 'rooms' , '
        bedrooms' ,'bathrooms' , 'images'];

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

//    protected function tags()
//    {
//        return $this->belongsToMany(Tag::class, 'estate_tag',
//            'estate_id'  , 'tag_id',
//            'id', 'id')->withPivot([
//                'estate_id' , 'tag_id'
//        ]);
//    }

    protected function tags()
    {
        return $this->belongsToMany(Tag::class, 'estate_tag');
    }


}
