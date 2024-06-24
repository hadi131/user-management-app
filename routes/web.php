<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->name('index');


Route::view('login','login')->name('login');
Route::post('loginMatch',[UserController::class,'login'])->name('loginMatch');
Route::view('register','register')->name('register')->middleware(ValidUser::class);
Route::post('registerSave',[UserController::class,'register'])->name('registerSave')->middleware(ValidUser::class);
Route::get('logout',[UserController::class,'logout'])->name('logout')->middleware(ValidUser::class);

Route::resource('/employee', EmployeeController::class)->middleware(ValidUser::class);
Route::resource('/', EmployeeController::class)->middleware(ValidUser::class);

Route::resource('/address', AddressController::class)->middleware(ValidUser::class);
Route::resource('/country', CountryController::class)->middleware(ValidUser::class);
Route::resource('/state', StateController::class)->middleware(ValidUser::class);
Route::resource('/city', CityController::class)->middleware(ValidUser::class);
