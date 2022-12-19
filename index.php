<?php

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "./controller/FilmesController.php";

switch($rota){
    case "/":
        require "views/galeria.php";
        break;
    
    case "/novo":
        if($metodo == "GET") require "views/cadastrar.php";
        if($metodo == "POST") {
            $controller = new FilmesController();
            $controller->save($_REQUEST);
        };
        break;

    default:
        require "views/404.php";
        break;
}
