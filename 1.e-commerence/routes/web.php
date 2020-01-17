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



Auth::routes();
Route::get('/logout',function(){
    auth()->logout();
    return 'You are logged out';
});


Route::middleware('cart.check')->group(function(){
    Route::get('/', function () {
        return redirect('/product');
    });

    Route::get('home', 'HomeController@index')->name('home');

    Route::resource('product','ProductController')->only(['index','show']);

    Route::get('shopping-cart','CartController@show');

    Route::resource('cart-item','CartItemController')->only(['store','update','destroy']);

    Route::resource('transaction','TransactionController');

    Route::resource('transaction-detail','TransactionDetailController');

    Route::get('order','OrderController@index')->name('order');

});

