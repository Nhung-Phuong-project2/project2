<?php
use App\Http\Controllers\bookController;
use App\Http\Controllers\test;
use App\Http\Controllers\TestController;
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
 Route::get('/', function () {
    return view('layout');
});


/* Route::get('/book', 'bookController@index'); // Hiển thị danh sách sách
Route::get('/book/create', 'bookController@create'); // Thêm mới sách
Route::post('/book/create', 'bookController@store'); // Xử lý thêm mới sách
Route::get('/book/{id}/edit', 'bookController@edit'); // Sửa sách
Route::post('/book/update', 'bookController@update'); // Xử lý sửa sách
Route::get('/book/{id}/delete', 'bookController@destroy'); // Xóa sách  */
// Route::get('/b',[bookController::class,'home']);
Route::resource('book',bookController::class);