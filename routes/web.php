<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

Route::get('/', function()
{
    return view('home');
})->name('home');

Route::get('/contact', function ()
{
    return view('contact');
})->name('contact');

Route::get('/about', function()
{
    return view('about');
})->name('about');

Route::post('/contact', [ContactController::class, 'submit']);