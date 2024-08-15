<?php 
require_once './Responce.php';
require_once 'functions.php';
require_once 'config/functions.php';
require_once 'config/Databse.php';


$routes = (require_once 'routes.php');



$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if(array_key_exists($uri, $routes)){
    require $routes[$uri];
}else{
    abort();
};

function abort($code = 404) {
    http_response_code($code);

    require "controllers/{$code}.php";

    die();
};