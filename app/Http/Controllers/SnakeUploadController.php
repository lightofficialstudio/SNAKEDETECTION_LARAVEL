<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SnakeUploadController extends Controller
{
    // URL ของ Flask API สำหรับการทำนายว่างูเป็นพิษหรือไม่
    public $predictPostUrl = 'http://localhost:5000/predict';
    // ฟังก์ชันสำหรับแสดงหน้าอัพโหลดรูปภาพ
    public function index()
    {
        return view('check.upload');
    }
    // ฟังก์ชันสำหรับอัพโหลดรูปภาพและทำนายว่างูเป็นพิษหรือไม่
    public function upload(Request $request)
    {
        // ตรวจสอบว่ามีไฟล์ถูกอัพโหลดมาหรือไม่
        if ($request->hasFile('snake_image')) {
            // ทำการอัพโหลดไฟล์ไปยัง Flask API และรับข้อมูล JSON กลับมา
            $image = $request->file('snake_image');
            $response = Http::attach(
                'image',
                file_get_contents($image),
                $image->getClientOriginalName()
            )->post($this->predictPostUrl);

            // แปลงข้อมูล JSON ที่ได้รับเป็น array
            $predictions = json_decode($response->body(), true);

            // เตรียม array สำหรับเก็บข้อมูลที่ต้องการ
            $snakeDetails = [];

            // วนลูปผ่านผลการทำนายเพื่อเก็บข้อมูล
            foreach ($predictions as $prediction) {
                $snakeDetails[] = [
                    'class' => $prediction['class'],
                    'class_name' => $prediction['class_name'],
                    'confidence' => $prediction['confidence'],
                    'probability' => $prediction['probability']
                ];
            }

            // ส่งข้อมูลกลับไปยังหน้าบ้าน
            return response()->json($snakeDetails);
        } else {
            // หากไม่มีไฟล์ถูกอัพโหลด
            return response()->json(['error' => 'No file uploaded.'], 400);
        }
    }
}
