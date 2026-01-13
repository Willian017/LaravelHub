<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', fn() => view('welcome'));
Route::view('/','home');
Route::view('/curso','course',['title'=>'Curso'])->name('course');
Route::view('/cursos','courses',['title'=>'Cursos'])->name('courses');
Route::view('/checkout','checkout',['title'=>'Checkout'])->name('checkout');
Route::view('/licao','lesson',['title'=>'Lições'])->name('lesson');
Route::view('/home', 'home', ['title' => 'Home'])->name('home');
Route::view('/contato','contact',['title'=>'Contato'])->name('contact');
Route::view('/login', 'login', ['title' => 'Teste'])->name('login');
