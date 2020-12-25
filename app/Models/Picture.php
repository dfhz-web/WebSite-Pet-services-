<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{

    protected $guarded = ['id'];
    use HasFactory;

     ///polimorfica
     public function pictureable()
     {
         return $this->morphTo();
     }
}
