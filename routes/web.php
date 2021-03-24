<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Auth;
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
    return view('Pengguna.login');
})->name('/login');

//Auth::routes();
Route::post('/postlogin', 'LoginController@postlogin')->name ('postlogin');
Route::get('/logout', 'LoginController@logout')->name ('logout');

Route::group(['middleware' => ['auth','ceklevel:1']], function (){
    
    route::get('/home','HomeController@index');
    route::get('/stok', 'Stok_kartuController@index');
    route::get('/user', 'UserController@index');
    route::get('/adduser', 'UserController@create')->name ('adduser');
    route::post('/simpanuser', 'UserController@store')->name ('simpanuser');
   
});
