<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [MyController::Class, 'index']);
Route::post('/register', [MyController::Class, 'register']);
Route::resource('product',ProductController::class);
Route::get('/{pageName?}', function ($pageName = 'index')
{
    return view($pageName);
});