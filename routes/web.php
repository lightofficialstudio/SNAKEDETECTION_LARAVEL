<?php

// การเรียกใช้งาน Route จากไฟล์ web.php
use Illuminate\Support\Facades\Route;
// การเรียกใช้งาน Controller ที่เราสร้างไว้
use App\Http\Controllers\CallCenterController; // การเรียกใช้งาน Controller ของ สายด่วนงู
use App\Http\Controllers\FirstAidController; // การเรียกใช้งาน Controller ของ วิธีการปฐมพยาบาล
use App\Http\Controllers\SnakeCheckController; // การเรียกใช้งาน Controller ของ ตรวจสอบว่างูเป็นพิษหรือไม่
use App\Http\Controllers\SnakeProfileContoller; // การเรียกใช้งาน Controller ของ แสดงข้อมูลประวัติงู
use App\Http\Controllers\SnakeUploadController; // การเรียกใช้งาน Controller ของ อัพโหลดรูปภาพเพื่อตรวจสอบว่างูเป็นพิษหรือไม่
use App\Http\Controllers\SnakePolicyController; // การเรียกใช้งาน Controller ของ นโยบายความเป็นส่วนตัว
use App\Http\Controllers\AboutMeController; // การเรียกใช้งาน Controller ของ เกี่ยวกับเรา
use App\Http\Controllers\ManualController; // การเรียกใช้งาน Controller ของ คู่มือการใช้งาน

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
// ค้นหา

Route::get('/snake/search/content', [SnakeProfileContoller::class, 'content'])->name('snake.search.content'); // สารบัญงู
Route::get('/snake/search/attribute', [SnakeProfileContoller::class, 'attribute'])->name('snake.search.attribute'); // คุณลักษณะของงู

// แสดงข้อมูลประวัติงู
Route::get('/snake/profile/{id}', [SnakeProfileContoller::class, 'profile'])->name('snake.profile');
// ตรวจสอบว่างูเป็นพิษหรือไม่
Route::get('/snake/check/', [SnakeCheckController::class, 'index'])->name('snake.check');
// อัพโหลดรูปภาพเพื่อตรวจสอบว่างูเป็นพิษหรือไม่
Route::get('/snake/upload', [SnakeUploadController::class, 'index'])->name('snake.upload');
// ส่งข้อมูลรูปภาพไปยัง เพื่อทำนายว่างูเป็นงูชนิดไหน?
Route::post('/snake/upload/predict', [SnakeUploadController::class, 'upload'])->name('snake.upload.post');
// นโยบายความเป็นส่วนตัว
Route::get('/snake/policy', [SnakePolicyController::class, 'index'])->name('snake.policy');
// เกี่ยวกับเรา
Route::get('/snake/about-me', [AboutMeController::class, 'index'])->name('snake.aboutme');
// คู่มือการใช้งาน
Route::get('/snake/manual', [ManualController::class, 'index'])->name('snake.manual');
