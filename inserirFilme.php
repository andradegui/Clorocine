<?php

$titulo = $_POST['titulo'];
$sinopse = $_POST['sinopse'];
$nota = $_POST['nota'];
$poster = $_POST['poster'];

$bd = new SQLite3("filmes.db");

$sql = "INSERT INTO filmes (titulo, sinopse, nota, poster) VALUES (     
    '$titulo',
    '$sinopse',
     $nota,
    '$poster'    
)";

if ( $bd->exec($sql) ) 
    echo "\nSucesso ao inserir filme\n"; 
else
    echo "\nErro ao inserir filme\n"; 
