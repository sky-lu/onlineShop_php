<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MyAccountController;




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
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/add', [ContactController::class, 'addFeedback']);
Route::get('/service', [ServiceController::class, 'index']);
Route::get('/myaccount', [MyAccountController::class, 'index']);
Route::post('/myaccount/signup', [MyAccountController::class, 'signup']);
Route::post('/myaccount/login', [MyAccountController::class, 'login']);
Route::get('/myaccount/logout',[MyAccountController::class, 'logout']);