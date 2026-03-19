<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::get('/', function () {
    return view('pages.index');
});

Route::get('/project/create' , [ProjectController::class , 'index']);
