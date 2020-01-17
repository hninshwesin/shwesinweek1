<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function (){
    //localhost/api/v1/coupon-code/dkfj
    Route::get('coupon-code/{code}',function ($code){
    if ($code == 'validcode'){
        return json_encode(true);
    }
    else{
        return json_encode(false);
    }
    });
});


Route::prefix('v2')->group(function (){
    //localhost/api/v2/coupon-code/dkfj
    Route::get('coupon/{anotherpara}/{code}',function (){

    });
});


