<?php

use Illuminate\Support\Facades\Route;
use Admin\AdminController;
use User\UserController;
use App\Http\Controllers\GrilleController;
use App\Http\Controllers\ChapitreController;



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
    return view('welcome');
});

Auth::routes();
Route::resource('/admin/users', AdminController::class);
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/user', 'UserController@index')->name('user');
Route::resource('/grille', 'GrilleController@index');
Route::resource('/chapitre', 'ChapitreController@index');

Route::get('/add-grille',[GrilleController::class,'addGrille']);
Route::get('/add-chapitre/{id}',[GrilleController::class,'addChapitre']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', 'UserController');
Route::resource('grille','GrilleController');
Route::resource('role', 'RoleController');
Route::resource('chapitre', 'ChapitreController');


Route::get('/profile', 'UserController@profile')->name('user.profile');
Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');
Route::get('/{any}', function () {
   return view('post');
  })->where('any', '.*');
  //////axios

  Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
 
