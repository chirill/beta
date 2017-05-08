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
        'path_driver',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function location(){
        return $this->belongsTo('App\Location');
    }
}
