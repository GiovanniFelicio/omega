<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('client')->get('/core', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1/core', 'middleware' => ['client']], function () {
    Route::apiResources(
        ['user' => 'Api\\UserController',
            'patient' => 'Api\\PatientController']
    );
});
