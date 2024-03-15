<?php
namespace App\Http\Controllers;

use App\Models\Snake as SnakeModel;

class SnakeProfileContoller extends Controller
{
    public function index()
    {
        // ตั้งตัวแปร $snakes เพื่อเก็บข้อมูลทั้งหมดจาก โมเดล snake
        $Snake = SnakeModel::all();
        // ตั้งตัวแปร $data เพื่อเก็บข้อมูลทั้งหมดที่จะส่งไปที่ view
        $data = [
            'snakes' => $Snake
        ];
        // ส่งข้อมูลทั้งหมดไปที่ view snake_profile/search.blade.php โดย $data จะถูกส่งไปด้วย
        return view('snake_profile.search', $data);
    }

    public function profile($snake_id)
    {
        // ตั้งตัวแปร $snake เพื่อเก็บข้อมูลของงูที่มี id ตามที่ส่งมา
        $Snake = SnakeModel::find($snake_id);
        $Poision = $Snake->posion->code_name;
        // ตั้งตัวแปร $data เพื่อเก็บข้อมูลทั้งหมดที่จะส่งไปที่ view
        $data = [
            'snake' => $Snake
        ];
        return view('snake_profile.profile', $data);
    }
}
