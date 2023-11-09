<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function showHeader()
    {
        return view('layout.header');
    }
    
}
