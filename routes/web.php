<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false, 'reset' =>false]);

Route::group(['middleware' => 'auth'], function (){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
    Route::get('/employee/{id}', [EmpleadoController::class, 'show']);
    Route::get('/group', [EmpleadoController::class, 'showGroup']);
    Route::resource('empleado', EmpleadoController::class)->middleware('auth');
});

Auth::routes();



