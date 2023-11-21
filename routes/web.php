<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
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

Route::get(
    '/contents',
    [ContentController::class, 'index']
)->name('contents.index');

Route::get(
    '/contents/create',
    [ContentController::class, 'create']
)->name('contents.create');

Route::post(
    '/contents',
    [ContentController::class, 'save']
)->name('content.save');

Route::get(
    '/contents/{content}/edit',
    [ContentController::class, 'edit']
)->name('contents.edit');

Route::put(
    '/contents/{content}/update',
    [ContentController::class, 'update']
)->name('content.update');

Route::delete(
    '/contents/{content}/delete',
    [ContentController::class, 'delete']
)->name('content.delete');

Route::get(
    
);
