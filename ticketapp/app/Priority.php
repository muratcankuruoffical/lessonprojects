<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    //
    protected $table = "priorities";
    protected $fillable = ['name'];
    public function tickets(){
        return $this->belongsToMany('App\Ticket', 'department_tickets', 'priority_id', 'ticket_id');
    }
}
