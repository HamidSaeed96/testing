<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [CompanyController::class,'index'])->name('company.index');

Route::get('/create', [CompanyController::class,'create']);

Route::post('/store', [CompanyController::class,'store']);

Route::get('/show', [CompanyController::class, 'show'])->name('company.show');

Route::get('/delete/{id}', [CompanyController::class, 'destroy']);

Route::get('/edit/{id}', [CompanyController::class,'edit']);

Route::get('/update', [CompanyController::class,'update']);