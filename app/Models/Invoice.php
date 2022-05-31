<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['contract_id', 'tenant_id', 'status'];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }

    public function tenant(){
        return $this->belongsTo(User::class , 'tenant_id' , 'id');
    }

}
