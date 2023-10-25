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
    $message = 'hello laravel';
    return view('home', compact('message'));
});

Route::get('/abaut', function () {
    $data = [
        'title' => 'About As',
        'message' => 'lorem ipsum'
    ];
    return view('abaut', $data);
});
