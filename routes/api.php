<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeeksController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/weeks', [WeeksController::class,'get_weeks_for_user']);

// Frontend (react) is going to make a REQUEST to
// our Backend (laravel) API to grab all the data
// needed for the app (user info, vocabulary words, spelling,reading)


/* 
    Flow of the backend
    1. routes/api.php 
        a. CREATE A ROUTE that allows us to access the vocabulary words for a user and a week
    2. app/Http/Controllers
        a. Create a vocabulary CONTROLLER (C) that will communicate with our model(M) to fetch all the data we need
        b. Create a function in that controller file that will be linked with a route in api.php
        c. Return that data to the frontend 
    3. app/Models
        a. Create a vocbulary MODEL (M) that will fetch all the data necessary from our database
        b. Create a function in that model file that will grab all the vocablary words for a user and a week 


 */