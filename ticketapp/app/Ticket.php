<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $table = "tickets";
    protected $fillable = ['title','message'];
    public function departments(){
        return $this->hasOne('App\Department');
    }
    public function priorities(){
        return $this->hasOne('App\Priority');
    }
}
