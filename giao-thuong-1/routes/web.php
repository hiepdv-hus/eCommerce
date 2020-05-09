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

use Illuminate\Support\Facades\Route;

//== Frontend Routes ========/
// Home
Route::get('/', 'HomeController@index')->name('home');

Route::get('/tin-tuc', 'NewsController@index')->name('news');

Route::get('/su-kien', 'EventController@index')->name('event');
Route::get('/chi-tiet-su-kien', 'EventController@detail');

Route::get('/danh-sach-giao-thuong', 'TradeController@list')->name('tradeList');

Route::get('/chi-tiet-giao-thuong/{id}', 'TradeController@detail')->name('tradeDetail');

Route::get('/chi-tiet-doanh-nghiep/{id}', 'EnterpriseController@detail')->name('enterpriseDetail');






//Route::get('/detail', 'HomeController@detail')->name('home.detail');
//Route::get('/category', 'HomeController@category')->name('home.category');
//Route::get('/category/list', 'HomeController@getCategories');
//Route::get('/tin-tuc/danh-muc/{any}', 'HomeController@newsCategory')->where('any', '.*');
//Route::get('/tin-tuc/{any}', 'HomeController@news')->where('any', '.*');
//Route::post('/crawl', 'HomeController@crawl');
//Route::get('/crawl-all', 'HomeController@crawlAll');
//Route::get('/get-news', 'HomeController@getNews');
//Route::post('/insert', 'HomeController@insert');
//Route::get('/news/detail', 'HomeController@newsDetail');
//Route::get('/news/list', 'HomeController@newsList');
//---------------
//== End Frontend Routes ====
