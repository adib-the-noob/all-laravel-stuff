<?php

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

Route::get('/aboutme', function () {
    $data = [
        "name" => "Adib",
        "work"=> "Software Developer",
    ];
    return view('aboutme', $data);
});

Route::get('/admin-profile', function () {
    return view('admin.profile');
});