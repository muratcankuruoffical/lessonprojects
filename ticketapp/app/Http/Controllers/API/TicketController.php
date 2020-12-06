<?php

namespace App\Http\Controllers\API;

use App\Department;
use App\Http\Controllers\Controller;
use App\Priority;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    //
    public function addTicket(Request $request){
        $ticket = Ticket::create([
            'title' => $request->input('title'),
            'message' => $request->input('message'),
        ]);
        $ticket->departments()->attach($request->input('department_id'));
        $ticket->priorities()->attach($request->input('priority_id'));
        return response()->json(['message' => 'Ticket Successfully Created.', 'ticket' => $ticket], 201);
    }
    public function getTickets(){
        $tickets = Ticket::with('departments','priorities')->get();
        return response()->json(['tickets' => $tickets], 200);
    }
}
