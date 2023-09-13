<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallCenterController extends Controller
{
    public function index()
    {
        return view('callcenter/callcenter');
    }
}