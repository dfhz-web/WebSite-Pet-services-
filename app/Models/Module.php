<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    protected $guarded = ['id','status'];
    protected $withCount = ['beneficiaries','reviews'];

    use HasFactory;
    
    const eraser = 1;
    const check = 2;
    const published = 3;

    public function getRatingAttribute()
    {
        if($this->reviews_count)
        {
            return round($this->reviews->avg('rating'),1);

        }
        else{
            return 5;
        }
        
    }

    //Query Scopes/

    public function scopeType($query, $type_id)
    {
       if($type_id){
           return $query->where('type_id',$type_id);
       }
    }

    public function scopeKind($query, $kind_id)
    {
       if($kind_id){
           return $query->where('kind_id',$kind_id);
       }
    }

    ////more different

    public function getRouteKeyName()
    {
        return "slug";
    }


    //relacion uno a muchos inversa

    public function managment()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

       ///relacion muchos a muchos inversa

   public function beneficiaries()
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


    ///hasManyThrough
    public function lessons()
    {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }

}
