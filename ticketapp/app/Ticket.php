<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $table = "tickets";
    protected $fillable = ['title','message','department_id','priority_id'];
    public function departments(){
        return $this->belongsToMany('App\Department', 'department_tickets', 'ticket_id', 'department_id');
    }
    public function priorities(){
        return $this->belongsToMany('App\Priority', 'priority_tickets','ticket_id', 'priority_id');
    }
}
