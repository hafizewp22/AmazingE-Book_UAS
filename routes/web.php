<?php

use Illuminate\Support\Facades\Auth;
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

if (file_exists(app_path('Http/Controllers/LocalizationController.php')))
{
    Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class , 'lang']);
    Route::get('/lang/{locale}', [App\Http\Controllers\LocalizationController::class , 'lang']);
}

//Home
Route::get('/', [\App\Http\Controllers\BookController::class, 'books']);

Auth::routes();

Route::get('loading', [\App\Http\Controllers\HomeController::class, 'loading']);

Route::group(['middleware' => ['auth','isUser']], function () {
    //Book
    Route::get('detail/{id}', [\App\Http\Controllers\BookController::class, 'detail_eBook']);

    //Profile
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'edit_profile']);
    Route::put('update-profile/{id}', [\App\Http\Controllers\ProfileController::class, 'update_Profile']);

    Route::get('delete-user/{id}', [\App\Http\Controllers\ProfileController::class, 'delete_user']);

    Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout']);

    //Cart
    Route::get('cart', [\App\Http\Controllers\CartController::class, 'cart']);
    Route::get('addToCart/{ebook:id}', [\App\Http\Controllers\CartController::class, 'addToCart']);
    Route::get('delete-cart/{id}', [\App\Http\Controllers\CartController::class, 'delete_cart']);


});

Route::group(['middleware' => ['auth','isAdmin']], function () {
    //Account Role
    Route::get('account', [\App\Http\Controllers\ProfileController::class, 'account_maintenance']);
    Route::get('edit-role/{id}', [\App\Http\Controllers\ProfileController::class, 'edit_role']);
    Route::put('update-role/{id}', [\App\Http\Controllers\ProfileController::class, 'update_role']);
});




