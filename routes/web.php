<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BodyRecordController;
use App\Http\Controllers\ExerciseRecordController;
use App\Http\Controllers\TrainingController;


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

Route::controller(BodyRecordController::class)->middleware(['auth'])->group(function () {
    Route::get('/body', 'body')->name('body');
    //Route::get('/',[BodyRecordController::class, 'body']);
    //Route::get('/body_records/body', 'create')->name('create');
    Route::post('/body_records', 'store')->name('store');
});

//Route::get('/', [ExreciseRecordController::class,'exercise']);
//Route::get('/eexrcise_records/musclr_create', [ExreciseRecordController::class, 'create']);

Route::controller(ExerciseRecordController::class)->middleware(['auth'])->group(function(){
    Route::get('/exercise', 'exercise')->name('exercise');
    Route::get('/exercise_records/exercise_choise', 'create')->name('create');
    Route::get('/exercise_records/muscle_create', '筋力トレーニング')->name('筋力トレーニング');
    Route::get('/exercise_records/exercise_numerical', 'その他トレーニング')->name('その他トレーニング');
    Route::post('/exercise_records', 'store')->name('store');


    //Route::get('/', 'exercise')->name('exercise');
});

Route::controller(TrainingController::class)->middleware(['auth'])->group(function () {
    Route::get('/training_summary', 'summary')->name('summary');
    Route::get('trainings/training_resistance', 'レジスタンストレーニング')->name('レジスタンストレーニング');
    Route::get('trainings/training_arm', '腕')->name('腕');
    Route::get('/trainings/{training_arm}', 'show');
    //Route::get('/trainings/{list}', [TrainingController::class ,'list']);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

