<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;

class JqueryGrid extends Controller
{
    function index ()
    {
        return View()->make( 'tables/jquery-grid' );
    }
}