<?php

namespace App\Http\Controllers;

class SnakeProfileContoller extends Controller
{
    public function index()
    {
        return view('snake_profile.search');
    }

    public function profile()
    {
        return view('snake_profile.profile');
    }
}
