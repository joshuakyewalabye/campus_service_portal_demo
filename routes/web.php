<?php

//import the path of controller
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//now we create the route using the route keyword Route::get('/route name',[controller name :class ,'function name in controller '])-> returns a page named index;
//retriving get method used for now
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/store_contact', [ContactController::class, 'store'])->name('contact.store');
