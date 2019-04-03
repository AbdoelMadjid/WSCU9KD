<?php
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
return array(
    "dashboard" => array(
        "title" => "Dashboard",
        "icon" => "fa-home",
        "url" => url( 'web' ),
    ),

    "outlook" => array(
        "title" => "Outlook",
        "icon" => "fa-inbox",
        "url" => "#",
    ),

    "graphs" => array(
        "title" => "Graphs",
        "icon" => "fa-bar-chart-o",
        "url" => "#",
    ),

    "tables" => array(
        "title" => "Tables",
        "icon" => "fa-table",
        "url" => "#",
        "sub" => array(
            "normal-tables" => array(
                "title" => "Normal Tables",
                "icon" => "",
                "url" => url( 'web/tables/normal-tables' ),
            ),
            "data-tables" => array(
                "title" => "Data Tables",
                "icon" => "",
                "label_html" => "<span class=\"badge inbox-badge bg-color-greenLight hidden-mobile\">responsive</span>",
                "url" => url( 'web/tables/data-tables' ),
            ),
            "jquery-grid" => array(
                "title" => "Jquery Grid",
                "icon" => "",
                "url" => url( 'web/tables/jquery-grid' ),
            ),
        )
    ),

    "forms" => array(
        "title" => "Forms",
        "icon" => "fa-pencil-square-o",
        "url" => "#",
    ),

    "ui-elements" => array(
        "title" => "UI Elements",
        "icon" => "fa-desktop",
        "url" => "#",
    ),

    "widgets" => array(
        "title" => "Widgets",
        "icon" => "fa-list-alt",
        "url" => "#",
    ),

    "cool-features" => array(
        "title" => "Cool Features!",
        "icon" => "fa-cloud",
        "url" => "#",
    ),

    "app-views" => array(
        "title" => "App Views",
        "icon" => "fa-puzzle-piece",
        "url" => "#",
    ),

    "e-commerce" => array(
        "title" => "E-Commerce",
        "icon" => "fa-shopping-cart",
        "url" => "#",
    ),

    "Miscellaneous" => array(
        "title" => "Miscellaneous",
        "icon" => "fa-windows",
        "url" => "#",
    ),

    "smart-chat-api" => array(
        "title" => "Smart Chat API",
        "icon" => "fa-comment-o",
        "url" => "#",
    ),
);