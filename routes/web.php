<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cektemplate', function(){
     return view('layouts.template');
 });

 Route::get('/dosen', function(){
     return view('dosen.index');
 });

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/form', [DosenController::class, 'create']);
Route::post('/dosen', [DosenController::class, 'store']);
Route::get('/dosen/edit/{id}', [DosenController::class, 'edit']);
Route::put('/dosen/{id}', [DosenController::class, 'update']);
Route::delete('/dosen/{id}', [DosenController::class, 'destroy']);

