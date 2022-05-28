<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Tag extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function estates(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
         return $this->belongsToMany(Estate::class, 'estates_tags',
            'tag_id', 'estate_id', 'id',
            'id');
    }


}
