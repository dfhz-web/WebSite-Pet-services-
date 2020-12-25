<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $guarded = ['id'];
    use HasFactory;

       ///relacion uno a muchos

       public function modules()
       {
           return $this->hasMany('App\Models\Module');
       }
}
