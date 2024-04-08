<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnakePolicyController extends Controller
{
    public function index()
    {
        return view('policy/policy');
    }
}
