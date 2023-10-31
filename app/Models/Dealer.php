<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    public function sr()
    {
        return $this->hasMany(SR::class,'dealer_id','id');
    }
}
