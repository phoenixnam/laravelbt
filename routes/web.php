<?php

use App\Http\Controllers\baith;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tinhTongController;
use App\Models\Room;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//Tính tổng
// Route::get('/sum', [App\Http\Controllers\tinhTongController::class, 'index']);
// Route::post('/sum', [App\Http\Controllers\tinhTongController::class, 'Summ']);
// Route::get('/xinchao',[baith::class,'xinchao']
// );
// Route::get('/tinhTong', function () {
//     return view('tinhTong');
// });
// Route::get('signup',[signupController::class, 'index']);
// Route::post('signup','singupController@displayInfor');

// Route::post('/addproduct',[RoomController::class,"creatSession"]);

// Route::get('showproducts',[RoomController::class,"showProduct"])->name('showproducts');
Route::get('trangchu',[PageController::class,'getIndex']);
Route::get('/detail/{id}', [App\Http\Controllers\PageController::class, 'getDetail']);
Route::get('/type/{id}', [App\Http\Controllers\PageController::class, 'getLoaiSp']);
// use Illuminate\Support\Facades\Schema;
// Route::get('database',function(){
//     Schema::create('loaisanpham',function($table){
//         $table->increments('id');
//         $table->string('ten',200);
//     });
//     echo"Đã thực hiện lệnh tạo bảng thành công";
// });
// Route::get('master',[PageController::class, 'getIndex']);
// Route::post('master','singupController@displayInfor');
// Route::get('database',function(){
//     $chema::create('loaisanpham',function('loaisanpham')($table))
// });
// Route::get('signup',"signupController@indexx");
// Route::post('signup',"signupController@displayInfor");

