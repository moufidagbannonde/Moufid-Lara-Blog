<?php

use App\Http\Controllers\ArticleController;
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

Route::controller(ArticleController::class)->group(function () {

    Route::get('/moufid', 'index');
    Route::get('/article/create', 'create');
    Route::get('/article/{id}', 'show');
    Route::get('/article/{id}/edit', 'edit');


    Route::post('/article', 'store');
    Route::patch('/article/{id}', 'update');
    Route::delete('/article/{id}', 'destroy');

});