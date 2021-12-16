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
    $name = 'Champions of';
    $number = 'League of Legends';
    $champions = [
         'Gangplank', 'Warwick', 'Victor', 'Urgot', 'Sett' 
    ];
    return view('home', compact('name','number', 'champions'));
})->name('home');

Route::get('/shop', function(){
    return view('shop');
})->name('shop');