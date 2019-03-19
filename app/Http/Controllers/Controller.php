<?php

namespace App\Http\Controllers;

use \SmartUI;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //CONFIGURATION for SmartAdmin UI
    protected $_ui;

    //ribbon breadcrumbs config
    //array("Display Name" => "URL");
    public $breadcrumbs = array(
        "Home" => ""
    );

    /*navigation array config

    ex:
    "dashboard" => array(
        "title" => "Display Title",
        "url" => "http://yoururl.com",
        "url_target" => "_self",
        "icon" => "fa-home",
        "label_htm" => "<span>Add your custom label/badge html here</span>",
        "sub" => array() //contains array of sub items with the same format as the parent
    )

    */
    public $page_nav = array(
        "blank" => array(
            "title" => "dashboard",
            "icon" => "fa-home",
            "url" => "dashboard",
        )
    );

    //configuration variables
    public $page_title = "";
    public $page_css = array();
    public $no_main_header = false; //set true for lock.php and login.php
    public $page_body_prop = array(); //optional properties for <body>
    public $page_html_prop = array(); //optional properties for <html>

    public function __construct ()
    {

        $this->_ui = new SmartUI\UI();
        View()->share('_ui', $this->_ui);
        View()->share('breadcrumbs', $this->breadcrumbs);
        View()->share('page_nav', $this->page_nav);
        View()->share('page_title', $this->page_title);
        View()->share('page_css', $this->page_css);
        View()->share('no_main_header', $this->no_main_header);
        View()->share('page_body_prop', $this->page_body_prop);
        View()->share('page_html_prop', $this->page_html_prop);
    }
}
