<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    ///relacion uno a muchos

    public function posts()
    {
        return $this->hasMany(Post::class);
    }



    ///Relacion uno a uno
    public function profile()
   {
       return $this->hasOne('App\Models\Profile');
   }

   ///relacion uno a muchos
   public function modules_dictated()
   {
       return $this->hasMany('App\Models\Module');
   }

   ///relacion muchos a muchos
   public function modules_enrolled()
   {
       return $this->belongsToMany('App\Models\Module');
   }

   ///Relacion uno a muchos
   public function reviews()
   {
       return $this->hasMany('App\Models\Review');
   }


    ///Relacion uno a muchos
    public function obtain()
    {
        return $this->hasMany('App\Models\Obtain');
    }

    ///relacion muchos a muchos
   public function providers()
   {
       return $this->belongsToMany('App\Models\Provider');
   }

      ///relacion muchos a muchos inversa
      public function lessons()
      {
          return $this->belongsToMany('App\Models\Lesson');
      }

      ///uno a muchos

      public function comments()
      {
          return $this->hasMany('App\Models\Comment');
      }
      public function reactions()
      {
          return $this->hasMany('App\Models\Reaction');
      }

      //relacion uno a muchos touches
    public function touchess()
    {
        return $this->hasMany('App\Models\Touch');
    }



    //  /assistances
    //   /relacion muchos a muchos inversa
      public function assistances()
      {
          return $this->belongsToMany('App\Models\Assistance');
      }






}
