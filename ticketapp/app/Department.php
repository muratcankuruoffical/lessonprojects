<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = "departments";
    protected $fillable = ['name'];
    public function tickets(){
        return $this->belongsToMany('App\Ticket', 'department_tickets', 'department_id', 'ticket_id');
    }
}
