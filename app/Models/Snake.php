<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SnakePosionCode;

class Snake extends Model
{
    use HasFactory;
    protected $table = 'snake_database';
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
    public function posion()
    {
        return $this->belongsTo(SnakePosionCode::class);
    }
}
