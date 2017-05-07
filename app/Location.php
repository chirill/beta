<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $fillable = [
        'name',
        'street',
        'phone',
        'fax',
    ];

    public function users(){
        return $this->hasMany('App\User');
    }
}
