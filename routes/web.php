<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NurseController;
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
    return view('welcome');
});

Auth::routes();
Route::post('/','App\Http\Controllers\HomeController@insert')->name('post.insert');
Route::get('/welcomecopy', [App\Http\Controllers\UserController::class, 'index'])->name('doctor');
Route::get('/welcomenurse', [App\Http\Controllers\UserController::class, 'indexN'])->name('nurse');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::post('/buscar-registros', [UserController::class, 'buscar'])->name('buscar.registros');
Route::post('/buscar-registros2', [UserController::class, 'consulta2'])->name('consulta.registros');
Route::post('/buscar-patient', [DoctorController::class, 'buscarP'])->name('buscarP.registros');
Route::post('/buscar-patient2', [DoctorController::class, 'consulta2P'])->name('consultaP.registros');
Route::post('users/{id}/approve', 'App\Http\Controllers\DoctorController@approve')->name('users.approve');
Route::post('/insert_data', [NurseController::class, 'insert'])->name('insert.patient');
Route::post('/vital-patient2', [NurseController::class, 'consulta2N'])->name('consultaN.registros');

