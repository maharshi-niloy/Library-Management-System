<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/student', function () {
    return view('student.index');
});
Route::get('/student_edit', function () {
    return view('student.edit');
});
Route::get('/student_create', function () {
    return view('student.create');
});


Route::get('/publisher', function () {
    return view('publisher.index');
});
Route::get('/publisher_edit', function () {
    return view('publisher.edit');
});
Route::get('/publisher_create', function () {
    return view('publisher.create');
});


Route::get('/author', function () {
    return view('auther.index');
});
Route::get('/author_create', function () {
    return view('auther.create');
});
Route::get('/author_edit', function () {
    return view('auther.edit');
});


Route::get('/book', function () {
    return view('book.index');
});
Route::get('/book_edit', function () {
    return view('book.edit');
});
Route::get('/book_create', function () {
    return view('book.create');
});


Route::get('/category', function () {
    return view('category.index');
});
Route::get('/category_edit', function () {
    return view('category.edit');
});
Route::get('/category_create', function () {
    return view('category.create');
});
