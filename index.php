<?php

// explode url
$components = explode("/", $_GET['url']);

// get MVC components
$model = $components[0];
$view = $components[1];
$controller = $components[2];
$action = $components[3];

// check if the provided components are valid
if(!(empty($model) || empty($view) || empty($controller) || empty($action))){
    if(validateComponents($model, $view, $controller)){
        // include component files
        require_once 'model/'. $model . '.php';
        require_once 'view/' . $view . '.php';
        require_once 'controller/' . $controller . '.php';

        // initialize components
        $m = new $model(); // model
        $v = new $view($m); // view
        $c = new $controller($m, $action); // controller

        // render the view
        echo $v->render();
    }else{
        echo 'Please provide valid MVC components. 2';
    }
}else{
    echo 'Please provide valid MVC components. 3';
}

/**
 * Checks if provided MVC components are valid
 */
function validateComponents($model, $view, $controller){
    if(!file_exists('model/'. $model . '.php') || !file_exists('view/'. $view . '.php') || !file_exists('controller/'. $controller . '.php')){
        return false;
    }

    return true;
}

?>