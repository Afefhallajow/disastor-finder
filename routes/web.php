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




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



///////////////////
////// guest routes
///////////////////

Route::get('/','App\Http\Controllers\our_controllers\guestcontroller@index');
Route::get('/home', '\App\Http\Controllers\our_controllers\guestcontroller@index')->name('home');

Route::get('/search_name','\App\Http\Controllers\our_controllers\guestcontroller@search_ill_by_name1');
Route::post('/search_name','\App\Http\Controllers\our_controllers\guestcontroller@search_ill_by_name');

Route::get('/per','\App\Http\Controllers\our_controllers\guestcontroller@permision');

/// this must change to post
Route::get('/addnew','\App\Http\Controllers\our_controllers\guestcontroller@add_a_new_doctor_request');









///////////////////
////// patient routes
///////////////////

Route::get('/search','\App\Http\Controllers\our_controllers\patientcontroller@search_by_sym1');
Route::post('/search','\App\Http\Controllers\our_controllers\patientcontroller@search_by_sym');









///////////////////
////// doctor routes
///////////////////

Route::get('/add','\App\Http\Controllers\our_controllers\doctorcontroller@add_illness1');
Route::post('/add','\App\Http\Controllers\our_controllers\doctorcontroller@add_illness');

Route::get('/sta','\App\Http\Controllers\our_controllers\doctorcontroller@ShowStact1');
Route::post('/sta','\App\Http\Controllers\our_controllers\doctorcontroller@ShowStact');

Route::get('/edit1','\App\Http\Controllers\our_controllers\doctorcontroller@edit1');
Route::get('/edita','\App\Http\Controllers\our_controllers\doctorcontroller@edit2');
Route::post('/edita','\App\Http\Controllers\our_controllers\doctorcontroller@edit');




Route::get('/del','\App\Http\Controllers\our_controllers\doctorcontroller@delete1');
Route::post('/del','\App\Http\Controllers\our_controllers\doctorcontroller@delete');









///////////////////
////// admin routes
///////////////////
Route::get('/test','\App\Http\Controllers\our_controllers\admincontroller@test');

Route::get('/gets','\App\Http\Controllers\our_controllers\admincontroller@get_doctor_requests');

/// this must change to post
Route::post('/adds','\App\Http\Controllers\our_controllers\admincontroller@add_refuse_doctor_req');










/*
//Route::get('/', 'App\Http\Controllers\services@add_illness');
//Route::get('/', 'App\Http\Controllers\services@search_by_symp');




Route::get('/','\App\Http\Controllers\main_Controller@index');
//Route::get('/','\App\Http\Controllers\working\facade@edit_1');
//Route::get('/','\App\Http\Controllers\services@add_refuse_doctor_req');
//Route::get('/','\App\Http\Controllers\services@add_a_new_doctor_request');
//Route::get('/','\App\Http\Controllers\services@get_doctor_requests');
//Route::get('/','\App\Http\Controllers\main_Controller@search_ill_by_name');





//Route::post('/search_name','\App\Http\Controllers\main_Controller@search_ill_by_name');
Route::get('/ad','\App\Http\Controllers\User_Controller@set_admin1');

Route::post('/ad','\App\Http\Controllers\User_Controller@set_admin');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
*/
