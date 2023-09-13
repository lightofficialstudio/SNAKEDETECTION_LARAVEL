<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallCenterController;
use App\Http\Controllers\FirstAidController;
use App\Http\Controllers\SnakeProfileContoller;

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

Route::get('/snake/callcenter_contact' , [CallCenterController::class , 'index'])->name('snake.callcenter');

Route::get('/snake/firstaid' , [FirstAidController::class , 'index'])->name('snake.firstaid');

Route::get('/snake/profile' , [SnakeProfileContoller::class , 'index'])->name('snake.profile');