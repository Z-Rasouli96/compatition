<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CompetitionController;

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

// Route::get('/compatition',[CompetitionController::class,'index']);

// Route::post('/compatition-form',[CompetitionController::class,'store'])->name('compatition-list');

Route::get('/compatition-form',[CompetitionController::class,'index']);

Route::post('/compatition-list',[CompetitionController::class,'store'])->name('compatition.list');

Route::get('/compatition-list',[CompetitionController::class,'get']);

Route::get('/compatition-update/{id}',[CompetitionController::class,'edit'])->name('compatition.edit');

// Route::put('/compatition-update',[CompetitionController::class,'update']);

Route::get('/news',[NewsController::class,'show']);




