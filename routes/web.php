<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;
use App\Livewire\AboutUs;
use App\Livewire\BookNow;
use App\Livewire\ContactUs;
use App\Livewire\OurFleet;
use App\Livewire\OurServices;
use App\Livewire\CityWeServe;

Route::get('/', Index::class)->name('home');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/book-now', BookNow::class)->name('book-now');
Route::get('/cities-we-serve', CityWeServe::class)->name('cities-we-serve');
Route::get('/our-services', OurServices::class)->name('our-services');
Route::get('/our-fleets', OurFleet::class)->name('our-fleets');
Route::get('/contact-us', ContactUs::class)->name('contact-us');