<?php

use App\Http\Controllers\command;
use App\Http\Controllers\controller_produit;
use App\Http\Controllers\controller_order;
use App\Http\Controllers\ProfileController;
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

Route::get('/Action',[controller_produit::class,'show'])->name('Action');
Route::get('/Adventure',[controller_produit::class,'show_ch'])->name('Adventure');
Route::get('/Thriller',[controller_produit::class,'show_th'])->name('Thriller');
Route::get('/',[controller_produit::class,'show_w'])->name('welcome');
Route::post('/Addcard/{item}',[controller_order::class,'add'])->name('cart.add');
Route::post('/destroy',[controller_order::class,'destroy'])->name('destroy');
Route::post('/destroy/{id}',[controller_order::class,'destroyone'])->name('destroyone');
Route::post('/destroye/{id}',[command::class,'destroyone'])->name('destroyon');
Route::get('/field',[controller_order::class,'showI'])->name('field');
Route::get('/command',[command::class,'command'])->name('command');
Route::get('/buy',[command::class,'buy'])->name('buy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
