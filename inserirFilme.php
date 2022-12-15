<?php

session_start();

require("./repository/filmesRepositoryPDO.php");
require("./model/filme.php");

$filmesRepository = new FilmesRepositoryPDO();
$filme = new Filme();

$filme->titulo    = $_POST["titulo"];
$filme->sinopse   = $_POST["sinopse"];
$filme->nota      = $_POST["nota"];
$filme->poster    = $_POST["poster"];

if($filmesRepository->salvar($filme)){
    $_SESSION['msg'] = "Filme inserido com sucesso";
}else{
    $_SESSION['msg'] = "Erro ao inserir filme";
}

header("Location: /");
