<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Touch extends Model
{
    use HasFactory;

     // Relacioxkn uno a muchos a la inversas
     public function user()
     {
         return $this->belongsTo('App\Models\User');
 
     }
}
