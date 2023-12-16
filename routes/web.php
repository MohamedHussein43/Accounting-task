<?php

use Illuminate\Support\Facades\Route;
use App\http\livewire\CategoryComponent;
use App\http\livewire\YourComponentName;
use App\http\livewire\TestComponent;
use App\http\livewire\AccountingPanalComponent;
use App\http\Controllers\Controller;
use App\http\Controllers\CategoryController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',YourComponentName::class);
Route::get('categories',CategoryComponent::class)->name('categories');
Route::get('accounting-panal',AccountingPanalComponent::class)->name('accounting-panal');
Route::get('test',TestComponent::class);