<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{

 
    protected $fillable = [
        'name','rate','refundable_deposit','ratings','reviews'
    ];
}



