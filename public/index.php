<?php


// Autoload Classes

require_once __DIR__."/../vendor/autoload.php";

// echo "Hello world <br>";

// Get All routes

$routes=require_once __DIR__."/../routes/web.php";


    $request = $_SERVER["REQUEST_URI"];
    $request = explode("?", $request);

    $request=$request[0];  
    
    // $controller=$routes[$request][0]?? null;
    // $action =$routes[$request][1]?? null;

    // Destructuring
    
    [$controller, $action]= $routes[$request] ?? [null, null];


    if($controller && $action){
        $newController= new $controller();
        $newController->$action();
    }else{
        throw new Exception("404 Not Found");
    }

