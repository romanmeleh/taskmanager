<?php

use App\Http\Controllers\Api\TaskApiController;
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
Route::get('/tasks/{id}', [TaskApiController::class, 'show'])->name('api.show');
Route::get('/tasks', [TaskApiController::class, 'index'])->name('api.tasks');
Route::post('/tasks/status/{id}/update', [TaskApiController::class, 'changeStatus'])->name('api.changeStatus');

