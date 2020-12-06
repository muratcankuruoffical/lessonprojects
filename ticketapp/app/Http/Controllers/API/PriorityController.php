<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    //
    public function addPriority(Request $request){
        $priority = Priority::create(['name' => $request->input('name')]);
        return response()->json(['message' => 'Priority Successfully Created.', 'priority' => $priority], 201);
    }
    public function getPriorities(){
        $priorities = Priority::all();
        return response()->json(['priorities' => $priorities], 200);
    }
}
