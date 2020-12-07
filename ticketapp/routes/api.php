<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('department/add', [\App\Http\Controllers\API\DepartmentController::class, 'addDepartment']);
Route::get('departments', [\App\Http\Controllers\API\DepartmentController::class, 'getDepartments']);
Route::post('priority/add', [\App\Http\Controllers\API\PriorityController::class, 'addPriority']);
Route::get('priorities', [\App\Http\Controllers\API\PriorityController::class, 'getPriorities']);

Route::post('ticket/add', [\App\Http\Controllers\API\TicketController::class, 'addTicket']);
Route::post('tickets', [\App\Http\Controllers\API\TicketController::class, 'getTickets']);
