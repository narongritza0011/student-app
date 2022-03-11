<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'index']);
Route::get('/report', [StudentController::class, 'report']);
Route::post('/add/form', [StudentController::class, 'store'])->name('add.data');
Route::get('/report/detail_learn_it', [StudentController::class, 'detail_learn_it'])->name('detail_learn_it');
Route::get('/report/introduce_it', [StudentController::class, 'introduce_it'])->name('introduce_it');
Route::get('/report/future_career', [StudentController::class, 'future_career'])->name('future_career');

Route::get('/report/comment_covid', [StudentController::class, 'comment_covid'])->name('comment_covid');

Route::get('/report/reset', [StudentController::class, 'reset'])->name('reset');
