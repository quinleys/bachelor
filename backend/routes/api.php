<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Restaurant;
use Spatie\QueryBuilder\QueryBuilder;
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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

// Users 
Route::prefix('/user')->group( function() {
    Route::post('/login', 'api\v1\LoginController@login');
    Route::post('/register', 'api\v1\LoginController@register');
    Route::middleware('auth:api')->get('/all', 'api\v1\user\UserController@index');
    Route::middleware('auth:api')->get('/{id}', 'api\v1\user\UserController@show');
});

Route::prefix('/restaurant')->group(function(){
    Route::get('/all', 'api\v1\restaurant\RestaurantController@index');
    Route::get('/random', 'api\v1\restaurant\RestaurantController@random');
    Route::get('/{id}', 'api\v1\restaurant\RestaurantController@show');
});

Route::prefix('/reservation')->group(function(){
    Route::middleware('auth:api')->get('/all', 'api\v1\reservation\ReservationController@index');
    Route::middleware('auth:api')->get('/{id}', 'api\v1\reservation\ReservationController@show');
    Route::middleware('auth:api')->get('/user/{id}', 'api\v1\reservation\ReservationController@user');
    Route::middleware('auth:api')->post('/add', 'api\v1\reservation\ReservationController@store');
});

Route::prefix('/comment')->group(function(){
    Route::middleware('auth:api')->post('/add', 'api\v1\comment\CommentController@store');
    Route::get('/{id}', 'api\v1\comment\CommentController@all');
});
Route::prefix('/rating')->group(function(){
    Route::middleware('auth:api')->post('/add', 'api\v1\rating\RatingController@store');
    Route::get('/{id}', 'api\v1\rating\RatingController@all');
});
Route::prefix('/category')->group(function(){
    Route::get('/all', 'api\v1\categories\CategoryController@index');
});
Route::prefix('/payment')->group(function(){
    Route::get('/all', 'api\v1\payments\PaymentController@index');
});
Route::prefix('/facility')->group(function(){
    Route::get('/all', 'api\v1\facilities\FacilityController@index');
});
Route::prefix('/favorite')->group(function(){
    Route::get('/all', 'api\v1\favorite\FavoriteController@index');
    Route::middleware('auth:api')->post('/add', 'api\v1\favorite\FavoriteController@store');
    Route::middleware('auth:api')->delete('/{id}', 'api\v1\favorite\FavoriteController@destroy');
});