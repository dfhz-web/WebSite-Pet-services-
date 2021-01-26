<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answere extends Model
{
    protected $guarded = [];
    use HasFactory;




     ///relacion uno a uno
     public function provider()
     {
         return $this->hasOne('App\Models\Provider');

     }
     



 
    ///relacion uno a muchos

    public function assistances()
    {
        return $this->hasMany('App\Models\Assistance');
    }


  
      
}
