<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIControllers\GetController;
use App\Http\Controllers\APIControllers\SetController;
use App\Http\Controllers\APIControllers\UpdateController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'category/'], function () {
    Route::get('ListCategories',[GetController::class,'ListCategories'] );
    Route::get('getCategoryByName/{name?}',[GetController::class,'GetCategoryByName'] );
    Route::post('AddNewCategory',[SetController::class,'AddNewCategory'] );
});

Route::group(['prefix' => 'accounting/'], function () {
    Route::get('getAllOwners',[GetController::class,'ListOwners'] );
    Route::get('getOwnerById/{id?}',[GetController::class,'getOwnerById'] );
    Route::get('getOwnerByName/{name?}',[GetController::class,'getOwnerByName'] );
    Route::post('AddNewOwner',[SetController::class,'AddNewOwner'] );
    Route::put('UbdateOwner',[UpdateController::class,'UbdateOwner'] );
});

Route::group(['prefix' => 'admin/'], function () {
    Route::get('getAllAdminRevenue',[GetController::class,'getAllAdminRevenue'] );
});