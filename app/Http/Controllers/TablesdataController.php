<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesdataController extends Controller
{
    public function showTablesdata()
    {
        return view('pages.tablesdata');
    }
}
