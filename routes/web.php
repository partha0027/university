<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudoeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/home', [GudoeController::class, 'home'])->name('home');
Route::get('/about', [GudoeController::class, 'about'])->name('about');
Route::get('/contact', [GudoeController::class, 'contact'])->name('contact');
Route::get('/course-details', [GudoeController::class, 'courseDetails'])->name('course-details');
Route::get('/faculty', [GudoeController::class, 'faculty'])->name('faculty');
Route::get('/feedback', [GudoeController::class, 'feedback'])->name('feedback');
Route::get('/study-center', [GudoeController::class, 'studyCenter'])->name('study-center');
Route::get('/student-support', [GudoeController::class, 'studentSupport'])->name('student-support');
Route::get('/staff', [GudoeController::class, 'staff'])->name('staff');
Route::get('/exam-center', [GudoeController::class, 'examCenter'])->name('exam-center');
Route::get('/rules', [GudoeController::class, 'rules'])->name('rules');
Route::get('/gallery', [GudoeController::class, 'gallery'])->name('gallery');
Route::get('/fees', [GudoeController::class, 'fees'])->name('fees');
Route::get('/profile-update', [GudoeController::class, 'profileUpdate'])->name('profile-update');
Route::get('/study-material', [GudoeController::class, 'studyMaterial'])->name('study-material');

