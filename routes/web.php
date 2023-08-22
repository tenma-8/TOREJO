<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\BodyRecordController;

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

Route::get('/',[BodyRecordController::class, 'body']);

Route::get('/body_records/body', [BodyRecordController::class, 'create']);

Route::post('/body_records', [BodyRecordController::class, 'store']);
//Route::get('/', function () {
    //return view('body_records/body');
    //});
    
//Route::get('/test', [testController::class, 'test']);

//Route::get('/body_records', [BodyRecordController::class, 'index']);

