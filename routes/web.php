<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
//profile

Route::get('/profile/dashboard', function () {
    return view('user.pages.profile.dashboard');
})->middleware(['auth', 'verified'])->name('profile.dashboard');
Route::get('/profile/details', function () {
    return view('user.pages.profile.profile');
})->middleware(['auth', 'verified'])->name('profile.details');
Route::get('/profile/shortlisted', function () {
    return view('user.pages.profile.shortlisted');
})->middleware(['auth', 'verified'])->name('profile.shortlisted');

// counselling

Route::get('/counselling/booking', function () {
    return view('user.pages.counselling.counselling_booking');
})->name('counselling.booking');


// Alias route for legacy auth redirects
Route::get('/dashboard', function () {
    return redirect()->route('profile.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/destinations', function () {
    return view('user.pages.destinations');
})->name('destinations');

Route::get('/study-abroad', function () {
    return view('user.pages.study-abroad');
})->name('study-abroad');

Route::get('/related-articles', function () {
    return view('user.pages.related-articles');
})->name('related-articles');
Route::get('/event', function () {
    return view('user.pages.event');
})->name('event');
Route::get('/study-australia', function () {
    return view('user.pages.study-australia');
})->name('study-australia');
Route::get('/find-courses', function () {
    return view('user.pages.find-courses');
})->name('find-courses');
Route::get('/courses-details', function(){
    return view('user.pages.courses-details');
})->name('courses-details');
Route::get('/students-essentials', function(){
    return view('user.pages.students-essentials');
})->name('students-essentials');
Route::get('/health-cover', function(){
    return view('user.pages.health-cover');
})->name('health-cover');
Route::get('/health-cover-2', function(){
    return view('user.pages.health-cover-2');
})->name('health-cover-2');

//lending pages

Route::get('/lending/onboarding', function () {
    return view('user.lending.lendingpage-1');
})->name('lending.onboarding');

Route::get('/lending/onboarding-2', function () {
    return view('user.lending.lendingpage-2');
})->name('lending.onboarding2');

Route::get('/lending/onboarding3', function () {
    return view('user.lending.lendingpage-3');
})->name('lending.onboarding3');

Route::get('/lending/onboarding4', function () {
    return view('user.lending.lendingpage-4');
})->name('lending.onboarding4');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
