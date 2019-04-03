<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;

class DataTables extends Controller
{
    function index ()
    {
        return View()->make( 'tables/data-tables' );
    }
}