<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/blog', [ BlogController::class , 'IndexAction']);
Route::get('/home', [ HomeController::class , 'IndexAction'])->name('home');

Route::get('/index', [ BlogController::class , 'index'])->name('index');
Route::get('/posts/create' , [BlogController::class , 'create']) ->name('create');
Route::post('/posts',[BlogController::class , 'store'])-> name('store');
Route::get('/update/{id}',[BlogController::class , 'update'])-> name('update');
Route::PATCH('/updateID/{id}',[BlogController::class , 'updateID'])-> name('updateID');
Route::delete('/delete/{id}',[BlogController::class , 'delete'])-> name('delete');


Route::get('/posts/{post}' , [BlogController::class , 'show']) ->name('show');


