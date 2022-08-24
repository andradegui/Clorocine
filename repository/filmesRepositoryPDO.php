<?php

require "conexao.php";

class FilmesRepositoryPDO{
    
    public function listarTodos():array{

        $bd = Conexao::criar();
        $filmesLista = [];

        $sql = "SELECT * from filmes";
        $filmes = $bd->query($sql);
        while($filme = $filmes->fetchArray()){
            array_push($filmesLista, $filmes);
        }

        return $filmesLista;

    }

    // public function salvar(Filme $filme):bool{
        
    // }

}