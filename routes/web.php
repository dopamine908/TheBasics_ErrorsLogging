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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| 回傳404頁面
|--------------------------------------------------------------------------
如果有自訂404頁面
可以用 {{ $exception->getMessage() }} 來取得錯誤訊息
*/
Route::get('abort', 'ErrorLoggingController@returnAbort');
