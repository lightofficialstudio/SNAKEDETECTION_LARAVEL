<?php

namespace App\Http\Controllers;

use App\Models\Snake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SnakeUploadController extends Controller
{
    // URL ของ Ultralytics API สำหรับการทำนายว่างู
    public $predictPostUrl = 'https://api.ultralytics.com/v1/predict/4H8ocJLET9cegG6xdV8R';
    // ฟังก์ชันสำหรับแสดงหน้าอัพโหลดรูปภาพ
    public function index()
    {
        return view('check.upload');
    }
    // ฟังก์ชันสำหรับอัพโหลดรูปภาพและทำนายว่างูเป็นพิษหรือไม่
    public function upload(Request $request)
    {
        // ตรวจสอบชนิดของไฟล์
        $request->validate([
            'snake_image' => 'required|image',
        ]);
        // ตรวจสอบว่ามีไฟล์ถูกอัพโหลดมาหรือไม่
        if ($request->hasFile('snake_image')) {

            $image = $request->file('snake_image'); // ไฟล์รูปภาพที่ถูกอัพโหลด
            // สร้าง HTTP request โดยใช้ Http facade
            $response = Http::withHeaders([
                'x-api-key' => '59452973bf549f6565c11f1e9fbbefe09f4a474f8a',
            ])->attach(
                    'image',
                    file_get_contents($image),
                    $image->getClientOriginalName()
                )->post($this->predictPostUrl, [
                        'size' => 224,
                        'confidence' => 0.05,
                        'iou' => 0.01,
                    ]);

            // แปลงข้อมูล JSON ที่ได้รับเป็น array
            $predictions = json_decode($response->body(), true);
            // เตรียม array สำหรับเก็บข้อมูลที่ต้องการ
            $snakeDetails = [];
            // ตรวจสอบก่อนว่ามี key 'data' ใน $predictions และ 'data' เป็น array
            if (isset($predictions['data']) && is_array($predictions['data'])) {
                // วนลูปผ่าน array 'data'
                foreach ($predictions['data'] as $prediction) {
                    // ค้นหาชื่อของงูจากฐานข้อมูล
                    $snake_class = Snake::where('name_en', $prediction['name'])
                        ->first();
                    // เงื่อนไขกรณีที่ ตรวจจับงูได้ซ้ำกันให้แสดงแค่ครั้งเดียว
                    if ($snake_class && !in_array($snake_class->id, array_column($snakeDetails, 'id'))) {
                        // เก็บข้อมูลที่ต้องการไว้ใน array
                        $snakeDetails[] = [
                            'id' => $snake_class->id ?? null,
                            'class_name' => $snake_class->name_th ?? $prediction['name'],
                            'image' => asset($snake_class->image ? 'project/images/snake_type/' . $snake_class->image : 'project/images/snake-profileimg.png'),
                            'posion_type' => $snake_class->posion_type,
                            'posion_description' => $snake_class->posion_description ?? '',
                            'confidence' => $prediction['confidence'],
                            'probability' => number_format($prediction['confidence'] * 100, 2) // แก้ไขให้ถูกต้องตามที่แนะนำ
                        ];
                    }
                }


            }

            // ส่งข้อมูลกลับไปยังหน้าบ้าน
            return response()->json([
                'original' => $predictions,
                'snakes' => $snakeDetails,
            ]);
        } else {
            // หากไม่มีไฟล์ถูกอัพโหลด
            return response()->json(['error' => 'No file uploaded.'], 400);
        }
    }
}
