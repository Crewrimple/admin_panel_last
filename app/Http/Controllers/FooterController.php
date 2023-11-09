<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function showFooter()
    {
        return view('layout.footer');
    }
    
}
