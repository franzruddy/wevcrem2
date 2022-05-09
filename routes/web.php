<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/webcem',[MenuController::class,'index'])->name('cementerio_us.index');
Route::get('/webcem/historia',[MenuController::class,'historia']);
Route::get('/webcem/contactos',[MenuController::class,'contactos']);
Route::get('/webcem/obituario',[MenuController::class,'obituario']);
Route::get('/webcem/servicios',[MenuController::class,'servicios']);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
