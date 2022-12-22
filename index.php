<?php

//Configurações de rotas da aplicação

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

require "./controller/FilmesController.php";

if($rota === "/"){
    require "views/galeria.php";    
    exit();
}

if($rota === "/novo"){
    if($metodo == "GET") require "views/cadastrar.php";

    if($metodo == "POST") {
        $controller = new FilmesController();
        $controller->save($_REQUEST);
    };

    exit();
}

//substr irá verificar se os 11 primeiros caracteres da string rota, é igual a string "/favoritar"
if(substr($rota, 0, strlen("/favoritar")) === "/favoritar"){
    $controller = new FilmesController();
    $controller->favorite(basename($rota));
    exit();
}

if(substr($rota, 0, strlen("/filmes")) === "/filmes"){
    if($metodo == "GET") require "views/galeria.php";

    if($metodo == "DELETE") {
        $controller = new FilmesController();
        $controller->delete(basename($rota));
    
    }
    exit();
}

require "views/404.php";
