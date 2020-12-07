<?php

namespace App\Http\Controllers\API;

use App\Department;
use App\Http\Controllers\Controller;
use App\Priority;
use App\Ticket;
use Illuminate\Database\Eloquent\Builder;
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
        $sortField = request('sort_field', 'created_at');
        if(!in_array($sortField, ['title', 'created_at'])){
            $sortField = 'created_at';
        }
        $sortDirection = request('sort_direction', 'desc');
        if(!in_array($sortDirection, ['asc', 'desc'])){
            $sortDirection = 'desc';
        }
        $tickets = Ticket::with('departments','priorities')->whereHas( 'departments', function (Builder $query) {
            if (request('department_id', '') != '') {
                return $query->where('department_id', '=', request('department_id'));
            }
        })->orderBy($sortField, $sortDirection)->get();
        return response()->json(['tickets' => $tickets], 200);
    }
}
