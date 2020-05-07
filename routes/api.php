<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Payments')->prefix('payments/mobile')->group(function() {
	Route::post('token', 'MpesaController@generateAccessToken')->name('mpesa.token');
	Route::post('stk/push', 'MpesaController@customerMpesaSTKPush')->name('mpesa.stk_push');
});
