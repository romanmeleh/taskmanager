<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth'])->group(function(){
//Task
Route::get('/', function (){
    redirect()->route('tasks');
});
Route::get('/tasks', [TaskController::class,'index'])->name('tasks');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/create', [TaskController::class, 'save'])->name('task.save');
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/task/edit/{id}', [TaskController::class, 'update'])->name('task.update');
Route::get('/task/delete/{id}', [TaskController::class, 'delete'])->name('task.delete');

//Status
Route::get('/statuses', [StatusController::class,'index'])->name('statuses');
Route::get('/status/create', [StatusController::class, 'create'])->name('status.create');
Route::post('/status/create', [StatusController::class, 'save'])->name('status.save');
Route::get('/status/delete/{id}', [StatusController::class, 'delete'])->name('status.delete');
Route::get('/status/edit/{id}', [StatusController::class, 'edit'])->name('status.edit');
Route::post('/status/edit/{id}', [StatusController::class, 'update'])->name('status.update');
});
//Auth
Route::get('/login', [CustomAuthController::class,'index'])->name('login');
Route::post('/login', [CustomAuthController::class, 'customLogin'])->name('customlogin');
Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');

