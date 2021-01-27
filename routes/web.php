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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return "Welcome Home page ";
// })->name('home');

// /*  Route by Parameter (required OR Optional)*/

// Route::get('/product/{id}', function ($id) {
//     return "product parameter required " . $id;
// })->name('product');

// Route::get('/products/{id?}', function () {
//     return "product parameter optional " ;
// })->name('products');


/* Route Namespace */

//Route::namespace('Front')->group(function () {
//    // Controllers Within The "App\Http\Controllers\Front" (Namespace)
//    Route::get('users','UserController@showuser');
//
//});

/* Route Group - Prefix - Middleware
namespace = Folder (prevent repeated)
*/

//Route::group(['middleware' => 'auth'] , function (){
//    Route::get('user','UserController@showuser');
//});


// Route::group(['namespace' => 'Front' ] , function (){
//     Route::get('users',function (){ return 'test Middleware '; });
//     Route::get('user','UserController@showuser') -> middleware('auth');
//     Route::get('user1','UserController@showuser1') ;
// });


// Route::get('login', function (){
//    return "Must Be login to access pages";
// }) -> name('login');


// Route bta3 el login 
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');

Route::get('/', 'HomeController@index');

Route::any('fillable', 'CrudController@getoffer' );



Route::group(['prefix' => LaravelLocalization::setLocale() , 
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function () {
Route::group(['prefix' => 'offers'], function () {
    // Route::get('store', 'CrudController@store');
    Route::get('create', 'CrudController@create')->name('offers.create');
    Route::post('store', 'CrudController@store')->name('offers.store');

    Route::get('all', 'CrudController@getAllOffers');
 

});

});