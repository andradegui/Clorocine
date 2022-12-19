<?php

session_start();
require("./repository/filmesRepositoryPDO.php");
require("./model/filme.php");

class FilmesController
{

    public function index()
    {
        $filmesRepository = new FilmesRepositoryPDO();
        return $filmesRepository->listarTodos();
    }

    public function save($request)
    {
        $filmesRepository = new FilmesRepositoryPDO();
        $filme = (object) $request;

        $upload = $this->savePoster($_FILES);

        if( gettype($upload) == "string" ){
            $filme->poster = $upload;
        }

        if ($filmesRepository->salvar($filme)) {
            $_SESSION['msg'] = "Filme inserido com sucesso";
        } else {
            $_SESSION['msg'] = "Erro ao inserir filme";
        }

        header("Location: /");
    }

    private function savePoster($file){
        // Caminho da pasta que ficará img
        $posterDir = "assets/posters/";
        // Caminho de como irá salvar no BD
        $posterPath = $posterDir . basename($file["poster_file"]["name"]);
        // Ajustando o nome do arquivo temporario
        $posterTmp = $file["poster_file"]["tmp_name"];
        //Fazendo a verificação se deu certo mover o arquivo da pasta temporaria p/ pasta do projeto
        if(move_uploaded_file($posterTmp, $posterPath)){
            return $posterPath;
        }else{
            return false;
        }
    }
}
