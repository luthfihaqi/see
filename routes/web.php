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
    return view('Pengguna.login');
})->name('');

Route::post('/postlogin', 'LoginController@postlogin')->name ('postlogin');
Route::get('/logout', 'LoginController@logout')->name ('logout');

Route::group(['middleware' => ['auth','ceklevel:superadmin']], function (){
    
    route::get('/home','HomeController@index');
    route::get('/stok', 'StokkartuController@index');
    route::get('/user', 'UserController@index');
    route::get('/adduser', 'UserController@create')->name ('adduser');
    route::post('/simpanuser', 'UserController@store')->name ('simpanuser');
});
