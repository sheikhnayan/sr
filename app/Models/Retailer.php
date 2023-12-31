<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;

    public function bazar()
    {
        return $this->belongsTo(Bazar::class,'bazar_id','id');
    }

    public function union()
    {
        return $this->belongsTo(Union::class,'union_id','id');
    }
}
