<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LotesController;
use Illuminate\Support\Facades\DB; 

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
/*Route::get('/ShowRegisters', [LotesController::class, 'ShowRegisters'])->name('index');*/

Route::get('/', function () {
    return view('welcome');
});



Route::match(['get', 'post'],'/obtenerInformacion', [LotesController::class, 'obtenerInformacion'])->name('obtenerInformacion');