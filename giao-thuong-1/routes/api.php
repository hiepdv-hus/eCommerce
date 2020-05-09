<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/craw-lottery', 'LotteryController@crawLottery')->name('api.lottery.craw_lottery');
Route::get('/get-lottery', 'LotteryController@getLottery')->name('api.home.get_lottery');
