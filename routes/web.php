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

// H7

Route::post('/regexp/{code}', 'PageController@H7regexp');
Route::get('/regexp', 'PageController@H7MainView');

Route::post('/date/{code}', 'PageController@H7Date');
Route::get('/date', 'PageController@H7DateMainView');


Route::post('/metahaku/{str}', 'PageController@H7MetaSearch');
Route::get('/metahaku', 'PageController@H7Search');

Route::post('/meta/{str}', 'PageController@H7T3_search');
Route::get('/meta', 'PageController@H7T3_index');

Route::post('/metapattern/{str}', 'PageController@H7T4_search');
Route::get('/metapattern', 'PageController@H7T4_index');

// H8

Route::get('/assignments/h8', 'PageController@H8');


//studetronic

Route::get('studentjson', 'StudentController@studentjson');
Route::get('coursejson', 'StudentController@coursejson');

Route::get('student', 'StudentController@studentlist');
Route::get('course', 'StudentController@courselist');

Route::get('courses', 'StudentController@courses');

Route::get('courseview', 'StudentController@courseview');

Route::get('studentcredits', 'StudentController@studentcredits');

Route::get('/studentform', 'StudentController@studentform');
Route::post('/storestudent','StudentController@store');



// CRUD routes

Route::resource('customers','CustomerController');

Route::get('/customers', 'CustomerController@index');

Route::get('/customer/{id}', 'CustomerController@show');

Route::get('/customers/create', 'CustomerController@create');

Route::post('/customers/search/{term}', 'CustomerController@search');

Route::post('/customers','CustomerController@store');

Route::get('/customers/{id}/edit', 'CustomerController@edit');

Route::patch('/customers/{id}', 'CustomerController@update');

Route::delete('/customers/{id}', 'CustomerController@destroy');
