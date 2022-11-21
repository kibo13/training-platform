<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::view('/', 'platform.index');
Route::view('/auth', 'auth.index');
Route::view('/admin', 'admin.index');
