<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['name' , 'phone' , 'email' , 'date', 'time', 'status', 'estate_id', 'tenant_id' , 'note'];

    public function user()
    {
        return $this->belongsTo(User::class, 'tenant_id', 'id');
    }

    public function estate()
    {
        return $this->belongsTo(Estate::class, 'estate_id', 'id');
    }
}
