<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/architecture', function (Request $request) {
    return $request->user();
});

Route::post('/v1/auth/login', 'Api\\AccessTokenCustomController@issueToken')->name('architecture.auth');

//Route::group(['prefix' => 'v1/core'], function () {
//    Route::apiResources(
//        ['user' => 'Api\\UserController',
//            'patient' => 'Api\\PatientController']
//    );
//});
