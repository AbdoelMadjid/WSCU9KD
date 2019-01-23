<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    function index ()
    {
        return View()->make( 'index' );
    }

    function datatable ()
    {
        return View()->make( 'datatable' );
    }

    function calendar ()
    {
        return View()->make( 'calendar' );
    }

    function gallery ()
    {
        return View()->make( 'gallery' );
    }

    function gmap_xml ()
    {
        return View()->make( 'gmap_xml' );
    }

    function inbox ()
    {
        return View()->make( 'inbox' );
    }

    function invoice ()
    {
        return View()->make( 'invoice' );
    }

    function profile ()
    {
        return View()->make( 'profile' );
    }
}