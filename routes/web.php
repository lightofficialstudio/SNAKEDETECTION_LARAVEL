<?php

use App\Http\Controllers\CallCenterController;
use App\Http\Controllers\FirstAidController;
use App\Http\Controllers\SnakeCheckController;
use App\Http\Controllers\SnakeProfileContoller;
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
})->name('snake.home');

Route::get('/snake/callcenter_contact', [CallCenterController::class, 'index'])->name('snake.callcenter');

Route::get('/snake/firstaid', [FirstAidController::class, 'index'])->name('snake.firstaid');

Route::get('/snake/search', [SnakeProfileContoller::class, 'index'])->name('snake.search');
Route::get('/snake/profile', [SnakeProfileContoller::class, 'profile'])->name('snake.profile');

Route::get('/snake/check/', [SnakeCheckController::class, 'index'])->name('snake.check');
