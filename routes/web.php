<?php

use App\Http\Controllers\CallCenterController;
use App\Http\Controllers\FirstAidController;
use App\Http\Controllers\SnakeCheckController;
use App\Http\Controllers\SnakeProfileContoller;
use App\Http\Controllers\SnakeUploadController;
use Illuminate\Support\Facades\Route;

/*
    ส่วนของการเรียกใช้งาน Controller และ Route สำหรับแต่ละหน้า
    Route คือ URL ที่เราสามารถเข้าถึงหน้าต่าง ๆ ของเว็บได้
    โดยการเรียกใช้งาน Controller ที่เราได้สร้างไว้
*/

// หน้าแรก
Route::get('/', function () {
    return view('welcome');
})->name('snake.home');
// ติดต่อ เบอร์ฉุกเฉิน
Route::get('/snake/callcenter_contact', [CallCenterController::class, 'index'])->name('snake.callcenter');
// การปฐมพยาบาล
Route::get('/snake/firstaid', [FirstAidController::class, 'index'])->name('snake.firstaid');
// ค้นหาประวัติงู
Route::get('/snake/search', [SnakeProfileContoller::class, 'index'])->name('snake.search');
// แสดงข้อมูลประวัติงู
Route::get('/snake/profile/{id}', [SnakeProfileContoller::class, 'profile'])->name('snake.profile');
// ตรวจสอบว่างูเป็นพิษหรือไม่
Route::get('/snake/check/', [SnakeCheckController::class, 'index'])->name('snake.check');
// อัพโหลดรูปภาพเพื่อตรวจสอบว่างูเป็นพิษหรือไม่
Route::get('/snake/upload', [SnakeUploadController::class, 'index'])->name('snake.upload');
// ส่งข้อมูลรูปภาพไปยัง Flask API เพื่อทำนายว่างู
Route::post('/snake/upload/predict', [SnakeUploadController::class, 'upload'])->name('snake.upload.post');
