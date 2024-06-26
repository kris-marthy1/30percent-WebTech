<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/super_dashboard', [MainController::class, 'super_dashboard']);
Route::get('/super_users', [MainController::class, 'super_users']);
Route::get('/add_establishments', [MainController::class, 'add_establishments']);
Route::get('/super_sign_out', [MainController::class, 'super_sign_out']);
Route::get('/update_est/{id}', [MainController::class, 'update_est']);
Route::get('/delete_record/{id}', [MainController::class, 'delete_record']);



Route::post('/verify_login', [MainController::class, 'verify_login']);
Route::post('/update_record', [MainController::class, 'update_record']);
Route::post('/add_est', [MainController::class, 'add_est']);
