<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SnakePosionCode;

class Snake extends Model
{
    use HasFactory;
    // กำหนดชื่อตารางในฐานข้อมูล
    protected $table = 'snake_database';
    // กำหนดให้สามารถเพิ่มข้อมูลเข้าไปในตารางได้
    protected $fillable = [
        'category',
        'name_th',
        'name_en',
        'name_sci',
        'features',
        'behaviors',
        'food',
        'location',
        'status',
        'reference',
        'posion_id',
        'image',
    ];

    // กำหนดความสัมพันธ์กับตาราง snake_posion_code
    public function posion()
    {
        return $this->belongsTo(SnakePosionCode::class);
    }
}
