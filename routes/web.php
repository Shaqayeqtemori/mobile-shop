<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inventory', function () {
    return view('Mobile.shop.inventory'); 
});

Route::get('/inventory2', function () {
    return view('Mobile.shop.inventory2'); 
});

Route::get('/sell', function () {
    return view('Mobile.shop.sell'); 
});

Route::get('/salaryworkers', function () {
    return view('Mobile.shop.salaryworkers'); 
});