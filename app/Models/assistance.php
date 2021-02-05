<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    use HasFactory;
    protected $guarded = ['status'];

    const Coordinate = 0;
    const Coordinated= 1;
    

///relacion uno a muchos inversa
// public function platform()
// {
//     return $this->belongsTo('App\Models\Platform');
// }
    //  users
    // public function users()
    // {
    //     return $this->belongsToMany('App\Models\User');
    // }


    ///relacion uno a muchos inversa
      public function user()
      {
        return $this->belongsTo('App\Models\User');
      }




     ///lesson
      ///relacion uno a muchos inversa
    //   public function lesson()
    //   {
    //       return $this->belongsTo('App\Models\Lesson');
    //   }
    


    //  /get attribute
    //  /fill out when assistance_id and user_id are there.
      public function getCompleteAttribute()
    {
       return  $this->users->contains(auth()->user()->id);
    } 



      ///relacion uno a muchos inversa
      public function answere()
      {
          return $this->belongsTo('App\Models\Answere');
      }





}
