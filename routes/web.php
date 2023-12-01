<?php

use App\Http\Controllers\Form\FormUserController;
use App\Http\Controllers\SortrudnikController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});

Route::group(['prefix' => '/formuser', 'namespace' => 'Form'], function () {
    Route::get('/', [FormUserController::class, 'index']);
    Route::get('/create', [FormUserController::class, 'createGet']);
    Route::post('/create', [FormUserController::class, 'createPost']);
    Route::get('/delete/{id}', [FormUserController::class, 'destroy']);
});

Route::group(['prefix' => '/sotrudnik'], function () {
    Route::get('/create', [SortrudnikController::class, 'create']);
    Route::post('/create', [SortrudnikController::class, 'store']);
});