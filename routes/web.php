<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\eventDeitailsController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\paymentSuccessController;






Route::get('/home', [homeController::class, 'home']);
Route::get('/event', [eventController::class, 'event']);
Route::get('/eventDeitails', [eventDeitailsController::class, 'eventDeitails']);
Route::get('/contact', [contactController::class, 'contact']);
Route::get('/payment', [paymentController::class, 'payment']);
Route::get('/paymentSuccess', [paymentSuccessController::class, 'paymentSuccess']);






