<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = ['apartment_id', 'estate_id', 'tenant_id', 'start_at', 'end_at', 'status', 'document'];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }


    public function tenant()
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
