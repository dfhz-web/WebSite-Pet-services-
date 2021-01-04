<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;
    protected $guarded = [''];

    const fill_out_empty = 0;
    const fill_out = 1;

    const result_empty = 0;
    const result= 1;

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
      ///relacion uno a muchos inversa
      public function lesson()
      {
          return $this->belongsTo('App\Models\Lesson');
      }
    

     ///fill out when assistance_id and user_id are there.
      public function getCompleteAttribute()
    {
       return  $this->users->contains(auth()->user()->id);
    } 

}
