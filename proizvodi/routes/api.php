<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\PrezentacijaController;
use App\Http\Controllers\ProizvodController;
use App\Http\Controllers\API\AuthController;

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
Route::post('/register',[AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);



Route::get('/listaporizvoda', [ProizvodController::class, 'index'])->name('proizvodi');
Route::get('/proizvodi/{id}', [ProizvodController::class, 'show']);

Route::post('/dodaj',[PrezentacijaController::class,'dodajPrezentaciju']);
Route::get('/prezentacije',[PrezentacijaController::class,'listaPrezentacija']);
Route::delete('/obrisi/{id}',[PrezentacijaController::class,'obrisiPrezentaciju']);
Route::put('/prezentacija/{id}',[PrezentacijaController::class,'izmena']);

Route::get('/kategorije', [KategorijaController::class, 'index'])->name('kategorije');
Route::get('/kategorije/dodaj', [KategorijaController::class, 'create']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    Route::resource('/proizvodi', ProizvodController::class)->only(['update', 'store', 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});