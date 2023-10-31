<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bazar extends Model
{
    use HasFactory;

    public function union(){
        return $this->belongsTo(Union::class,'union_id','id');
    }

    public function upazila(){
        return $this->belongsTo(Upazila::class,'upazila_id','id');
    }
}
