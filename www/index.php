<?php
    require_once("routing.php");
    $_request_url = $_SERVER['REQUEST_URI'];

    $url = explode('/',$_request_url);

    if ( array_key_exists( $url[1], $_route ) ) {
        $class_name = $_route[$url[1]]['model'];
        $view_name = $_route[$url[1]]['view'];
        require_once("controller/".$class_name.".php");
        $controller = new $class_name("hello");
        include_once("view/".$view_name.".php");
    } else {
        $class_name = "Top";
        $view_name = "top";
        require_once("controller/".$class_name.".php");
        $controller = new $class_name("hello");
        include_once("view/".$view_name.".php");
    }
