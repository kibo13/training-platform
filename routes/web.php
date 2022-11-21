<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes([
    'login'      => true,
    'reset'      => false,
    'confirm'    => false,
    'verify'     => false,
    'register'   => false,
]);

Route::view('/', 'platform.index');

Route::group([
    'middleware' => 'auth',
    'prefix'     => 'admin',
    'as'         => 'admin.'
], function () {

    Route::view('/', 'admin.index')->name('home');

    Route::group(['middleware' => 'role:admin,teacher'], function () {
        Route::get('/scores', function () { return 'Раздел оценок'; })->name('scores');
    });
});



