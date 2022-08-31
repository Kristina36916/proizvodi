<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProizvodController;
use App\Models\Proizvod;

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

Route::get('/proizvodi', [ProizvodController::class, 'index']);
Route::get('/proizvodi/{id}', [ProizvodController::class, 'show']);
Route::post('/create/{id}', [ProizvodController::class, 'create']);