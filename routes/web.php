<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages/welcome');
}) ->name("home");

Route::get('about-us', function () {
    return view('pages/aboutus' , [
        'page_name' => 'About Us' ,
        'page_description' => 'This is My Page About ' 
    ]);
}) ->name("about");

Route::view('contact-us', 'pages/contact' , [
    'page_name' => 'Contact Us' ,
    'page_description' => 'This is My Page Contact ' 
]) ->name("contact");


Route::get('category/{id}', function ($id) {

    $cats = [
        '1' => 'HTML' ,
        '2' => 'CSS'
    ];

    return view('pages/category' , [
        'this_id' => $id ,
        'type_id' => $cats[$id] ??  "This is id Not Found" ,
    ]);
})->name("category");




Route::get('category/{id}/post/{postid}', function ($id , $postid) {
    return view('pages/category' , [
        'this_id' => $id ,
        'post_id' => $postid  

    ]);
});



Route::group(['namespace' => 'users'], function () {
    Route::get('user', 'UserController@showUser' ) ;
    Route::get('user2', 'UserController@showUser2' ) ;
    Route::get('user3', 'UserController@showUser3' ) ;
});

Route::get('login', function () {
    return "Must be Login To Access Middleware " ;
})->name('login');