<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/projects' , [ProjectController::class , 'create']);
Route::post('/projects' , [ProjectController::class , 'store']);
