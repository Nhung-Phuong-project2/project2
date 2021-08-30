<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\BookController as ControllersBookController;
use App\Http\Controllers\test;
use App\Models\bookModel;
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
Route::get('/',[bookController::class,'home']);
Route::resource('book',bookController::class);





