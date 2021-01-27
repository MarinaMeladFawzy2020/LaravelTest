<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great
Must Add file admin route to (App-> providers-> RouteServiceProvider.php)
*/


Route::get('/admin', function () {
    return "Welcome Admin page ";
})->name('admin');
