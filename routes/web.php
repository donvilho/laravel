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

/*
Route::get('/', function () {
    return view('layouts/app');
});
*/


Route::get('/', 'PageController@index');
Route::get('/assignments', 'PageController@assingments');
Route::get('/assignments/T{id}', ['uses' => 'PageController@homeworkView']);


// H5
Route::get('/contact1', 'ContactController@showinfo');
Route::get('/contact2', 'ContactController@returninfo');
Route::get('/person', 'ContactController@showperson');
Route::get('/listpersons', 'ContactController@listpersons');
Route::get('/assignments/T3/Basket', 'PageController@H5_basketView');
Route::get('/assignments/T3/Main', 'PageController@H5_mainView');
Route::get('/appt2', function () {
    return view('pages.homework.h5t2.child');
});
//