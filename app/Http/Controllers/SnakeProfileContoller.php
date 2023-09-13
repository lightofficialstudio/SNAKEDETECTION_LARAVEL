<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnakeProfileContoller extends Controller
{
    public function index()
    {
        return view('snake_profile.profile');
    }
}