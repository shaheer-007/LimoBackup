<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/book-online', function () {
    return view('book');
})->name('book');

Route::get('/our-services', function () {
    return view('services');
})->name('services');

Route::get('/our-fleets', function () {
    return view('fleets');
})->name('fleets');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::post('/contact-us', [App\Http\Controllers\ContactController::class, 'ContactEmail'])->name('contact.send');