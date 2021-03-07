<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post(){
        return $this->hasOne('App\Models\Post');
    }


   
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function roles() {
        return $this->belongsToMany('App\Models\Role')->withPivot('created_at');
        //To costumize tables name  and columns follow the format below
        // return $this->belongsToMany('App\Models\Role', 'user_roles', 'user_id', 'role_id');
        
    }
    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'imageable');
    }

    public function getNameAttribute($value) {
        return strtoupper($value);
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = strtoupper($value);
    }

    public static function scopeLatest($query) {
        echo 'entrou na função escopo';
        return $query->orderBy('id', 'asc');
    }


    
    
}
