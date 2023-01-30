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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::view('/','client.layout.home');
Route::view('about','client.layout.about');
Route::view('service','client.layout.service');
Route::view('project','client.layout.project');
Route::view('contact','client.layout.contact');
