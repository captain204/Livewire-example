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
    return view('welcome');
});



Route::layout('layouts.base')->section('body')->group(function () {
    Route::livewire('/contact/{id}', 'show-contact');
});


//Route::get('/home', 'HomeController@show');

Route::livewire('/home', 'counter');

Route::livewire('/contact/{id}', 'show-contact');

Route::livewire('/post', 'show-posts');

Route::livewire('/delete', 'delete-post');




