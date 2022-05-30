<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = ['apartment_id', 'estate_id', 'type', 'tenant_id', 'start_at', 'end_at', 'status', 'document'];

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
        return $this->belongsTo(User::class , 'tenant_id' , 'id');
    }

    public function getImageUrlAttribute()
    {
        if (empty($this->image)) {
            return asset('admin_files/assets/img/backgrounds/02.png');
        }
        return asset('uploads/' . $this->image);
    }


}
