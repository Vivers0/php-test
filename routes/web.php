<?php

use App\Http\Controllers\Users\UsersController;

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
    return view('welcome');
});

Route::group(['prefix' => '/users', 'namespace' => 'Users'], function () {
    Route::get('/', [UsersController::class, 'index']);
    Route::get('/export', [UsersController::class, 'export']);

    Route::get('/create', [UsersController::class, 'create']);
    Route::post('/create', [UsersController::class, 'store'])->name("users.create");
    
    Route::get('/import', [UsersController::class, 'import']);
    Route::post('/import', [UsersController::class, 'update'])->name("users.update");
});