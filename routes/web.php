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

Route::get('/', 'App\Http\Controllers\HomeController@index');



/*Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return 'Logout usuario';
});*/

//midelware para proteger la ruta
Route::group(['middleware' => 'auth'], function() {

    Route::get('productos', 'App\Http\Controllers\ProductoController@getIndex');

    Route::get('productos/show/{id}', 'App\Http\Controllers\ProductoController@getShow');

    Route::get('productos/create', 'App\Http\Controllers\ProductoController@getCreate');

    Route::post('productos/create', 'App\Http\Controllers\ProductoController@postCreate');

    Route::get('productos/edit/{id}', 'App\Http\Controllers\ProductoController@getEdit');

    Route::put('productos/edit', 'App\Http\Controllers\ProductoController@putEdit');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


Auth::routes();

