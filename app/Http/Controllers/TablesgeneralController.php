<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesgeneralController extends Controller
{
    public function showTablesgeneral()
    {
        return view('pages.tablesgeneral');
    }
}
