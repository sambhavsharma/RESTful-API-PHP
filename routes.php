<?php
    
    if(empty($_REQUEST['controller'])) {
        echo 'Hey! You just got 404\'D. Did you just come up with that url by your own?';
        return header("HTTP/1.1 404 Not Found");
    }

    require "api/user.php";
    require "api/item.php";

    // Requests from the same server don't have a HTTP_ORIGIN header
    if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
        $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
    }

    try {

        $controller = $_REQUEST['controller'];
        $request = $_REQUEST['request'];

        if(empty($controller)) {
            header("HTTP/1.1 404 Not Found");
            return json_encode("No route found!");
        }

        if (empty($request)) {
            $request = $controller;
        } else if(ctype_digit($request)) {
            $request = $controller . '/' . $request;
        }

        switch($controller) {

            case 'user':
                $API = new UserController($request);
                echo $API->processAPI();
                break;

            case 'item':
                $API = new ItemController($request);
                echo $API->processAPI();
                break;

            default:
                echo 'Hey! You just got 404\'D. Did you just come up with that url by your own?';
                return header("HTTP/1.1 404 Not Found");
        }

        
    } catch (Exception $e) {
        echo json_encode(Array('error' => $e->getMessage()));
    }
?>