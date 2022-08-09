<?php

$bd = new SQLite3("filmes.db");

$titulo    = $bd->escapeString($_POST["titulo"]);
$sinopse   = $bd->escapeString($_POST["sinopse"]);
$nota      = $bd->escapeString($_POST["nota"]);
$poster    = $bd->escapeString($_POST["poster"]);

$sql = "INSERT INTO filmes (titulo, sinopse, nota, poster) 
        VALUES (:titulo, :sinopse, :nota, :poster)";

$stmt = $bd->prepare($sql);
$stmt->bindValue(':titulo', $titulo, SQLITE3_TEXT);
$stmt->bindValue(':sinopse', $sinopse, SQLITE3_TEXT);
$stmt->bindValue(':nota', $nota, SQLITE3_FLOAT);
$stmt->bindValue(':poster', $poster, SQLITE3_TEXT);

if ( $stmt->execute() ) 
    echo "\nSucesso ao inserir filme\n"; 
else
    echo "\nErro ao inserir filme . $bd->lastErrorMsg()\n"; 

header("Location: galeria.php?msg=Filme+cadastrado+com+sucesso");
