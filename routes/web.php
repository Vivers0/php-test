<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\FileController;

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

Route::get("/upload", [FileController::class, 'index']);
Route::post("/upload", [FileController::class, 'store'])->name('file.store');


Route::get("/file/{id}", [FileController::class, "show"]);
Route::get("/download/{id}", [FileController::class, "download"])->name("file.download");