<?php

namespace App\Http\Controllers\API;

use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    public function addDepartment(Request $request){
        $department = Department::create(['name' => $request->input('name')]);
        return response()->json(['message' => 'Department Successfully Created.', 'department' => $department], 201);

    }
    public function getDepartments(){
        $departments = Department::all();
        return response()->json(['departments' => $departments], 200);
    }
}
