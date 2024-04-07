<?php
namespace App\Http\Controllers;

use App\Models\Snake;
use Illuminate\Http\Request;

class SnakeProfileContoller extends Controller
{
    /**
     * แสดงเนื้อหาของโปรไฟล์งู
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function content(Request $request)
    {
        $query = Snake::query();

        // ตรวจสอบและเพิ่มเงื่อนไขการค้นหาแบบมีความคล้ายคลึงสำหรับ 'ชื่อ (name)'
        if ($request->has('searchByName') && $request->searchByName != '') {
            $query->where('name_th', 'LIKE', '%' . $request->searchByName . '%')
                ->orWhere('name_en', 'LIKE', '%' . $request->searchByName . '%')
                ->orWhere('name_sci', 'LIKE', '%' . $request->searchByName . '%');
        }

        // ตรวจสอบและเพิ่มเงื่อนไขการค้นหาแบบมีความคล้ายคลึงสำหรับ 'ชื่อวงศ์ (family)'
        if ($request->has('posion_type') && $request->posion_type != '') {
            $query->where('posion_type', 'LIKE', '%' . $request->posion_type . '%');
        }

        // ตรวจสอบและเพิ่มเงื่อนไขการค้นหาแบบมีความคล้ายคลึงสำหรับ 'ชื่อวงศ์ (family)'
        if ($request->has('status') && $request->status != '') {
            $query->where('status', 'LIKE', '%' . $request->status . '%');
        }

        // ทำการค้นหาข้อมูลตามเงื่อนไขที่ได้รับและรับข้อมูลทั้งหมด
        // ทำการค้นหาข้อมูลตามเงื่อนไขที่ได้รับและรับข้อมูลทั้งหมด
        if ($request->query()) {
            $snakes = $query->get();
            session(['searchPerformed' => true]);
        } else {
            $snakes = collect();
        }
        $data =
            [
                'snakes' => $snakes,
                'searchByName' => $request->searchByName,
                'posion_type' => $request->posion_type,
                'status' => $request->status,
                'searchPerformed' => session('searchPerformed')
            ];

        // ส่งข้อมูลทั้งหมดไปที่ view snake_profile/search.blade.php โดย $data จะถูกส่งไปด้วย
        return view('snake_profile.content', $data);
    }

    /**
     * แสดงข้อมูลตามเงื่อนไขที่รับเข้ามา
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function attribute(Request $request)
    {
        // สร้าง query โดยใช้โมเดล SnakeModel
        $query = Snake::query();

        // ตรวจสอบและเพิ่มเงื่อนไขการค้นหาแบบมีความคล้ายคลึงสำหรับ 'head_type'
        if ($request->has('head_type') && $request->head_type != '') {
            $query->where('head_type', 'LIKE', '%' . $request->head_type . '%');
        }

        // สำหรับ 'can_hoody' และ 'can_hiss' เนื่องจากเป็นค่า boolean อาจไม่จำเป็นต้องใช้ LIKE
        if ($request->has('can_hoody') && $request->can_hoody != '') {
            $query->where('can_hoody', $request->can_hoody == 'yes');
        }

        if ($request->has('can_hiss') && $request->can_hiss != '') {
            $query->where('can_hiss', $request->can_hiss == 'yes');
        }

        // ตรวจสอบและเพิ่มเงื่อนไขการค้นหาแบบมีความคล้ายคลึงสำหรับ 'pattern'
        if ($request->has('pattern') && $request->pattern != '') {
            $query->where('pattern', 'LIKE', '%' . $request->pattern . '%');
        }

        // ตรวจสอบและเพิ่มเงื่อนไขการค้นหาแบบมีความคล้ายคลึงสำหรับ 'color'
        if ($request->has('color') && $request->color != '') {
            $query->where('color', 'LIKE', '%' . $request->color . '%');
        }



        // ทำการค้นหาข้อมูลตามเงื่อนไขที่ได้รับและรับข้อมูลทั้งหมด
        if ($request->query()) {
            $snakes = $query->get();
            session(['searchPerformed' => true]);
        } else {
            $snakes = collect();
        }

        // สร้างตัวแปร $data เพื่อเก็บข้อมูลทั้งหมดที่จะส่งไปที่ view
        $data = [
            'snakes' => $snakes,
            'head_type' => $request->head_type,
            'can_hoody' => $request->can_hoody,
            'can_hiss' => $request->can_hiss,
            'pattern' => $request->pattern,
            'color' => $request->color,
            'searchPerformed' => session('searchPerformed')
        ];

        // ส่งข้อมูลที่ค้นหาได้กลับไปที่ view พร้อมกับตัวแปร $snakes
        return view('snake_profile.attribute', $data);
    }

    /**
     * แสดงโปรไฟล์ของงูที่มี id ตามที่รับเข้ามา
     *
     * @param int $snake_id
     * @return \Illuminate\Contracts\View\View
     */
    public function profile($snake_id)
    {
        // ตั้งตัวแปร $snake เพื่อเก็บข้อมูลของงูที่มี id ตามที่ส่งมา
        $Snake = Snake::find($snake_id);
        // ตั้งตัวแปร $data เพื่อเก็บข้อมูลทั้งหมดที่จะส่งไปที่ view
        $data = [
            'snake' => $Snake
        ];
        return view('snake_profile.profile', $data);
    }
}
