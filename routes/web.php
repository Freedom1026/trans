<?php

use Illuminate\Support\Facades\Route;

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
    return view('allroute');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/trans', function () {
    return view('translate');
});

//翻譯DB用
// Route::post('fromdb', 'trans@GetFromDB');
// Route::post('savedb', 'trans@SaveToDB');