<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// // Arrow Function
// Route::get('/', fn() => view('home'));

// // Route View
// Route::view('/','home');

// // Function
// Route::get('/', function(){
//     return view('home');
// });

Route::get('/',[HomeController::class, 'index'])->name('home.index');

// // Padrao que se utiliza
// Route::group(['prefix' => '/'], function(){
//     Route::get('/',[HomeController::class, 'index'])->name('home.index');
//     Route::get('/create',[HomeController::class, 'create'])->name('home.create');
//     Route::post('/',[HomeController::class, 'store'])->name('home.store');
//     Route::get('/{home}',[HomeController::class, 'show'])->name('home.show');
//     Route::get('/{home}/edit',[HomeController::class, 'edit'])->name('home.edit');
//     Route::patch('/{home}',[HomeController::class, 'update'])->name('home.update');
//     Route::delete('/{home}',[HomeController::class, 'destroy'])->name('home.destroy');
// });



Route::get('/curso',[CourseController::class, 'index'])->name('course.index');
Route::get('/cursos',[CoursesController::class, 'index'])->name('courses.index');
Route::get('/checkout',[CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/licao',[LessonController::class, 'index'])->name('lesson.index');
Route::get('/contato', [ContactController::class,'index'])->name('contact.index');
// Route::get('/login',[LoginController::class, 'index'])->name('login.index');
// Route::post('/login',[LoginController::class, 'store'])->name('login.store');

Route::resource('login', LoginController::class)->only([
    'index', 'store'
]);

Route::delete('/logout', [LoginController::class, 'destroy'])->name('logout');

// Route::resource('login', LoginController::class)->except([
//     'index', 'store'
// ]);
