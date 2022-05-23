<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'start_at', 'end_at', 'status', 'tenant_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'tenant_id', 'id');
    }
}
