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
    Route::get('/login/{service}', 'api\v1\LoginController@redirect');
    Route::get('/login/{service}/callback', 'api\v1\LoginController@callback');
    Route::middleware('auth:api')->get('/all', 'api\v1\user\UserController@index');
    Route::middleware('auth:api')->get('/{id}', 'api\v1\user\UserController@show');
});

Route::prefix('/restaurant')->group(function(){
    // dashboard routes 
    Route::get('/dashboard/{id}', 'api\v1\restaurant\RestaurantController@dashboard');
    Route::get('/dashboard/{id}/daily', 'api\v1\restaurant\RestaurantController@daily');
    Route::get('/dashboard/{id}/weekly', 'api\v1\restaurant\RestaurantController@weekly');
    Route::get('/dashboard/{id}/monthly', 'api\v1\restaurant\RestaurantController@monthly');

    Route::get('/all', 'api\v1\restaurant\RestaurantController@index');
    Route::get('/random', 'api\v1\restaurant\RestaurantController@random');
    Route::get('/{id}', 'api\v1\restaurant\RestaurantController@show');
    Route::get('/{id}/reservation', 'api\v1\restaurant\RestaurantController@filterReservation');
});
Route::prefix('/table')->group(function(){
    Route::get('/all', 'api\v1\table\TableController@index');
});

Route::prefix('/extra')->group(function(){
    Route::get('/all', 'api\v1\extra\ExtraController@index');
});
Route::prefix('/room')->group(function(){
    Route::get('/all', 'api\v1\room\RoomController@index');
    Route::get('/{id}', 'api\v1\room\RoomController@show');
    Route::get('/id/{id}', 'api\v1\room\RoomController@specific');
    Route::post('/store', 'api\v1\room\RoomController@store');

    Route::delete('/{id}/delete','api\v1\room\RoomController@destroy');
});
Route::prefix('/dashboard')->group(function(){
        // dashboard routes
        Route::get('/{id}/layouts', 'api\v1\dashboard\DashboardController@layout');
        Route::get('/{id}/reservations', 'api\v1\dashboard\DashboardController@recentReservations');
        Route::get('/{id}/comments', 'api\v1\dashboard\DashboardController@recentComments');
        Route::put('/room/update', 'api\v1\dashboard\DashboardController@updateroom');
        Route::put('/layout/update', 'api\v1\dashboard\DashboardController@updatelayout');
        Route::get('/room/{id}' ,'api\v1\dashboard\DashboardController@room');
        Route::get('/{id}/plattegrond', 'api\v1\dashboard\DashboardController@plattegrond');
        Route::post('/{id}/restaurant/update' , 'api\v1\restaurant\RestaurantController@update'); 
        Route::post('/{id}/restaurant/primaryimg' , 'api\v1\restaurant\RestaurantController@uploadprimaryImg');
        Route::post('/{id}/restaurant/uploadimages' , 'api\v1\restaurant\RestaurantController@uploadImages');
        Route::post('/{id}/restaurant/deleteimage' , 'api\v1\restaurant\RestaurantController@deleteImage');
        Route::get('/{id}/rooms/active', 'api\v1\dashboard\DashboardController@getActiveRooms');
});

Route::prefix('/layout')->group(function(){

    Route::get('/all', 'api\v1\layout\LayoutController@index');
    Route::get('/{id}', 'api\v1\layout\LayoutController@show');
    Route::get('/id/{id}', 'api\v1\layout\LayoutController@specific');
    Route::delete('/{id}/delete', 'api\v1\layout\LayoutController@destroy');
    Route::post('/store', 'api\v1\layout\LayoutController@store');
});

Route::prefix('/reservation')->group(function(){
    Route::middleware('auth:api')->get('/all', 'api\v1\reservation\ReservationController@index');
    Route::middleware('auth:api')->get('/{id}', 'api\v1\reservation\ReservationController@show');
    Route::middleware('auth:api')->get('/user/{id}', 'api\v1\reservation\ReservationController@user');
    Route::middleware('auth:api')->delete('/{id}/delete', 'api\v1\reservation\ReservationController@destroy');
    Route::middleware('auth:api')->get('/user/{id}/future', 'api\v1\reservation\ReservationController@future');
    Route::middleware('auth:api')->get('/user/{id}/past', 'api\v1\reservation\ReservationController@past');
    Route::middleware('auth:api')->post('/add', 'api\v1\reservation\ReservationController@store');
    Route::get('/{id}/weekly', 'api\v1\reservation\ReservationController@getWeeklyReservations');
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

Route::prefix('/price')->group(function(){
    Route::get('/all' , 'api\v1\prices\PriceController@index');
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
    Route::middleware('auth:api')->get('/user/{id}', 'api\v1\favorite\FavoriteController@user');
    Route::middleware('auth:api')->get('/user/{id}/all', 'api\v1\favorite\FavoriteController@getAllFavorites');
    Route::middleware('auth:api')->get('/restaurant/{id}', 'api\v1\favorite\FavoriteController@getFavorited');
});