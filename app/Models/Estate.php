<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'type', 'space', 'owner_id', 'image'];

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


}
