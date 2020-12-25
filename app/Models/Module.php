<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    protected $guarded = ['id','status'];
    use HasFactory;
    const eraser = 1;
    const check = 2;
    const published = 3;


    //relacion uno a muchos inversa

    public function Managment()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

       ///relacion muchos a muchos inversa

   public function Beneficiaries()
   {
       return $this->belongsToMany('App\Models\User');
   }

   ///Relacion uno a muchos
    public function reviews()
   {
       return $this->hasMany('App\Models\Review');
   }

    ///relacion uno a muchos inversa

    public function kind()
    {
        return $this->belongsTo('App\Models\Kind');
    }
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }

    //relacion uno a muchos
    public function requirements()
    {
        return $this->hasMany('App\Models\Requirement');
    }

    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }

    public function audience()
    {
        return $this->hasMany('App\Models\Audience');
    }

    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    //relacion uno a uno polimorfica

    public function picture()
    {
        return $this->morphOne('App\Models\Picture', 'pictureable');
    }


    ///
    public function lessons()
    {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }

}
