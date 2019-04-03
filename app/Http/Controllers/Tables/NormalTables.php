<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;

class NormalTables extends Controller
{
    function index ()
    {
        return View()->make( 'tables/normal-tables' );
    }
}