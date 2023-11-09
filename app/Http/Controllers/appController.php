<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function showapp()
    {
        return view('layout.app');
    }
}
