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

Route::get('/', 'Controller@home');
Route::get('/afisha', 'Controller@afisha');
Route::get('/news', 'Controller@news');

Route::post('/signup/check', 'Controller@signup');
Route::post('/reg', 'Controller@register');
Route::get('/logout', 'Controller@logout');
Route::get('/LKab', 'Controller@LKab');


Route::get('/admin/afisha', 'Controller@Aafisha');
Route::get('/admin/news', 'Controller@Anews');

Route::post('/admin/СhangeNews','Controller@СhangeNews');
Route::post('/admin/СhangeAfisha','Controller@СhangeAfisha');
Route::post('/admin/AddNews','Controller@AddNews');
Route::post('/admin/AddAfisha','Controller@AddAfisha');