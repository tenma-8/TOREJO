<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BodyRecordController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(BodyRecordcontroller::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'body')->name('body');
    //Route::get('/',[BodyRecordController::class, 'body']);
    Route::get('/body_records/body', 'create')->name('create');
    Route::post('/body_records/body', 'store')->name('store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

