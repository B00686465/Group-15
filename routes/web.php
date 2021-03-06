<?php

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

Use App\User;

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
//Route::get('/contact', 'PagesController@contact');



Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
// Return a single ticket
Route::get('/ticket/{slug?}', 'TicketsController@show');


Auth::routes();

Route::get('/home', 'PagesController@home')->name('home');


Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/books', 'BooksController@display')->name('books');



Route::get('/basket', 'BooksController@displayBasket');
Route::get('/basketadd/{id}', 'BooksController@BasketAdd')->name('basketAdd');

Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});