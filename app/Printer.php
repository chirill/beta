<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Printer extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'name',
        'ip',
        'user',
        'password',
        'location_id',
        'path',
        'localizare',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $uploads = '/driver/';

    public function location(){
        return $this->belongsTo('App\Location');
    }


    //this is accessor
    public function getPathAttribute($driver){
        return $this->uploads.$driver;
    }
}
