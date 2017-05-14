<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comp extends Model
{
    //
    protected $fillable = [
        'name',
        'os',
        'owner',
        'teamviewer',
        'detalii',
        'location_id',
    ];

    public function location(){
        return $this->belongsTo('App\Location');
    }

    public function setNameAttribute($value){
        if(!empty($value)){
            $this->attributes['name'] = strtoupper($value);
        }
    }
}
