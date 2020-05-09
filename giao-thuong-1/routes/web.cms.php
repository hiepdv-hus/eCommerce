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

//== Backend Routes ========/
// Dashboard
Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
});
//---------------

// Sale
Route::group(['prefix' => 'sale', 'namespace' => 'Sale'], function(){
    // Order
    Route::group(['prefix' => 'order'], function(){
        // GET
        Route::get('/', 'OrderController@index')->name('order.index');
        Route::get('/detail/{uid}', 'OrderController@detail')->name('order.detail');
        Route::get('/get-list-status', 'OrderController@getListStatus')->name('order.list_status');
        Route::get('/get-list-pending', 'OrderController@getListPending')->name('order.list_pending');
        Route::get('/income', 'OrderController@income')->name('order.income');
        Route::get('/count', 'OrderController@count')->name('order.count');

        // POST
        Route::post('/get-list', 'OrderController@getList')->name('order.list');
        Route::post('/create', 'OrderController@create')->name('order.create');
        Route::post('/cancel/{uid}', 'OrderController@cancel')->name('order.cancel');
    });
    //---------------
});
//---------------

// Product
Route::group(['prefix' => 'product', 'namespace' => 'Product'], function(){
    // GET
    Route::get('/', 'ProductController@index')->name('product.index');
    Route::get('/search', 'ProductController@search')->name('product.search');
    // POST
    Route::post('/get-list', 'ProductController@getList')->name('product.get_list');
});
//---------------

// Media
Route::group(['prefix' => 'media', 'namespace' => 'Media'], function(){
    Route::get('/list', 'MediaController@listForm');
    Route::get('/get-list', 'MediaController@list');
    Route::post('/upload', 'MediaController@upload');
    Route::delete('/delete', 'MediaController@delete');
});
//---------------

// Authentication
Route::group(['prefix' => 'auth'], function (){
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout');
});
//---------------

// Users
Route::group(['prefix' => 'system-user', 'namespace' => 'User'], function (){
    Route::get('/add', 'SystemUserController@addForm')->name('account.addForm');
    Route::get('/update/{id}', 'SystemUserController@updateForm');
    Route::post('/add', 'SystemUserController@add')->name('account.add');
    Route::put('/update', 'SystemUserController@update');
    Route::get('/get-detail', 'SystemUserController@getDetail');
    Route::delete('/delete', 'SystemUserController@delete');
    Route::get('/list', 'SystemUserController@listForm');
    Route::get('/get-list', 'SystemUserController@list');
    Route::post('/media', 'SystemUserController@media');

    //user_edit
    Route::get('/edit/{id}', 'SystemUserController@editForm');
    Route::get('/edit', 'SystemUserController@edit');
    Route::put('/update', 'SystemUserController@update');
    Route::get('/get-detail', 'SystemUserController@getDetail');
});

// Customer
Route::group(['prefix' => 'customer', 'namespace' => 'Customer'], function(){
    //CustomerDetai;
    Route::get('/detail/{id}', 'CustomerController@detail');
    Route::put('/update', 'CustomerController@update');
    Route::post('/update-information', 'CustomerController@updateInfomation');
    //---------------

    //CustomerList;
    Route::get('/list', 'CustomerController@listForm');
    Route::get('/get-list', 'CustomerController@list');
    Route::delete('/delete', 'CustomerController@delete');
    //-------------

    //CustomerEdit;
    Route::get('/edit/{id}', 'CustomerController@editForm');
    Route::post('/edit', 'CustomerController@edit');
    Route::put('/update', 'CustomerController@update');
    Route::get('/get-detail', 'CustomerController@getDetail');
    //-------------

    //CustomerAdd
    Route::get('/add', 'CustomerController@addForm');
    Route::post('/add', 'CustomerController@add');
    Route::put('/update', 'CustomerController@update');
    Route::get('/get-detail', 'CustomerController@getDetail');
    Route::post('/media', 'CustomerController@media');
});

// News
Route::group(['prefix' => 'news', 'namespace' => 'News'], function(){

    //NewsDetai;
    Route::get('/detail/{id}', 'NewsController@detail');
    Route::put('/update', 'NewsController@update');
    Route::post('/update-information', 'NewsController@updateInfomation');
    //---------------

    //NewsList;
    Route::get('/list', 'NewsController@listForm');
    Route::get('/get-list', 'NewsController@list');
    Route::delete('/delete', 'NewsController@delete');
    //-------------

    //NewsEdit;
    Route::get('/edit/{id}', 'NewsController@editForm');
    Route::post('/edit', 'NewsController@edit');
    Route::put('/update', 'NewsController@update');
    Route::get('/get-detail', 'NewsController@getDetail');
    Route::post('/media', 'NewsController@media');
    //-------------

    //NewsAdd
    Route::get('/add', 'NewsController@addForm');
    Route::post('/add', 'NewsController@add');
    Route::put('/update', 'NewsController@update');
    Route::get('/get-detail', 'NewsController@getDetail');
    Route::post('/media', 'NewsController@media');
    Route::post('/upload', 'NewsController@upload');

});

//Event
Route::group(['prefix' => 'event', 'namespace' => 'Event'], function(){

    //EventList;
    Route::get('/list', 'EventController@listForm');
    Route::get('/get-list', 'EventController@list');
    Route::delete('/delete', 'EventController@delete');
    //-------------

    //EventEdit;
    Route::get('/edit/{id}', 'EventController@editForm');
    Route::post('/edit', 'EventController@edit');
    Route::put('/update', 'EventController@update');
    Route::get('/get-detail', 'EventController@getDetail');
    Route::post('/media', 'EventController@media');
    //-------------

    //EventAdd
    Route::get('/add', 'EventController@addForm');
    Route::post('/add', 'EventController@add');
    Route::put('/update', 'EventController@update');
    Route::get('/get-detail', 'EventController@getDetail');
    Route::post('/media', 'EventController@media');
});

//Category
Route::group(['prefix' => 'category', 'namespace' => 'Category'], function (){

    //Category
    Route::get('/list_news', 'CategoryController@listNewsForm');
    Route::get('/get-list_news', 'CategoryController@listNews');

    //Add
    Route::get('/add', 'CategoryController@addForm');
    Route::post('/add', 'CategoryController@add');
});

//---------------

//== End Backend Routes ====
