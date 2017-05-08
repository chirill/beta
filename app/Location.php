<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;
    //
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $fillable = [
        'name',
        'street',
        'phone',
        'fax',
    ];

    public function users(){
        return $this->hasMany('App\User');
    }
    public function printers(){
        return $this->hasMany('App\Printer');
    }
}
