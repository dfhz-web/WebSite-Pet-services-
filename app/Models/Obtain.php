<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obtain extends Model
{

  protected $guarded = ['id','status_request'];
    use HasFactory;
    ///status_symtoms
    const slight = 1;
    const moderate= 2;
    const major = 3;


   //status_request
    const request = 4;
    const inprocess = 5;
    const complete = 6;

    ///relacion uno a muchos inversa
    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

}
