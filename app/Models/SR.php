<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SR extends Model
{
    use HasFactory;

    public function dealer(){
        return $this->belongsTo(Dealer::class,'dealer_id','id');
    }

    public function company(){
        return $this->belongsTo(Company::class,'company_id','id');
    }
}
