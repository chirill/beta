<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $username = 'username';
    protected $fillable = [
        'name', 'username', 'email', 'password','location_id','role_id','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function location(){
        return $this->belongsTo('App\Location');
    }

    public function setPasswordAttribute($value){
        if(!empty($value)){
            $this->attributes['password'] = bcrypt($value);
        }

    }

    public function isAdmin(){
        if ($this->role->name =='administrator' ){
            return true;
        }
        return false;
    }

}
