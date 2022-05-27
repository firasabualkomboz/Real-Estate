<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected function estates()
    {
        return $this->belongsToMany(Estate::class, 'estate_tag',
            'tag_id', 'estate_id', 'id',
            'id');
    }


}
