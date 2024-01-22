<?php

use App\Http\Controllers\CompetitionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/compatition',[CompetitionController::class,'index']);

Route::post('/compatition-form',[CompetitionController::class,'store'])->name('compatition-list');

