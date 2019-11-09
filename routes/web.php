<?php

use App\Http\Controllers\ProductReviewController;

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

use Illuminate\Support\Facades\Route;

// Route::get('/product/add', function () {
//     return view('pages.index');
// });

Route::get('/product/add', 'ProductReviewController@create');

Route::get('/products', 'ProductReviewController@index');

Route::post('/product/store', 'ProductReviewController@store');

Route::get('/product/{id}', 'ProductReviewController@show');

Route::get('/product/upvote/{id}', 'ProductReviewController@upvote');

