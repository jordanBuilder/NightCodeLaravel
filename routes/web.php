<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('accueil',function(){
    return view('accueil');
});
Route::get('test',[Controller::class, 'test']);

Route::post('store', [Controller::class, 'store']);
Route::put('update', [Controller::class, 'store']);
Route::post('delete', [Controller::class, 'delete']);

//Admin

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[Controller::class, 'dashboard']);
    Route::get('/profil',[Controller::class, 'profil']);
    Route::get('/parametre',[Controller::class, 'parametre']);
});

//user
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[Controller::class, 'dashboard']);
    Route::get('/profil',[Controller::class, 'profil']);
    Route::get('/parametre',[Controller::class, 'parametre']);
});

//manager
Route::prefix('manager')->group(function(){
    Route::get('/dashboard',[Controller::class, 'dashboard']);
    Route::get('/profil',[Controller::class, 'profil']);
    Route::get('/parametre',[Controller::class, 'parametre']);
});
