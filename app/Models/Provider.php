<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $guarded = [''];
    use HasFactory;

    use HasFactory;
    const unknown = 1;
    const known = 2;
    const approval = 3;


      ///relacion muchos a muchos inversa

     public function users()
     {
       return $this->belongsToMany('App\Models\User');
     }
}
