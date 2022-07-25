<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ( $bd->exec($sql) ) 
    echo "\nTabela filmes apagada\n"; 

$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR (200) NOT NULL,
        poster VARCHAR (200), 
        sinopse TEXT,
        nota DECIMAL (2,1)
)";

if ( $bd->exec($sql) ) 
    echo "\nTabela filmes criada\n"; 
else
    echo "\nErro ao criar tabela filmes\n"; 

$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    1, 
    'Thor: Love And Thunder',
    'https://www.themoviedb.org/t/p/original/6OEBp0Gqv6DsOgi8diPUslT2kbA.jpg',
    'Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Suco de cevadiss deixa as pessoas mais interessantis. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Mé faiz elementum girarzis, nisi eros vermeio. Si u mundo tá muito paradis? Toma um mé que o mundo vai girarzis! Nec orci ornare consequat.',
    9.1
)";

if ( $bd->exec($sql) ) 
    echo "\nSucesso ao inserir filme\n"; 
else
    echo "\nErro ao inserir filme\n"; 


$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
    2, 
    'Peaky Blinders',
    'https://www.themoviedb.org/t/p/original/i0uajcHH9yogXMfDHpOXexIukG9.jpg',
    'Mussum Ipsum, cacilds vidis litro abertis. Per aumento de cachacis, eu reclamis. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Suco de cevadiss deixa as pessoas mais interessantis. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Mé faiz elementum girarzis, nisi eros vermeio.',
    9.8
)";


if ( $bd->exec($sql) ) 
    echo "\nSucesso ao inserir filme\n"; 
else
    echo "\nErro ao inserir filme\n"; 
        
$sql = "SELECT * from filmes";
$rs = $bd->query($sql);

while ($filme = $rs->fetchArray()){

}

// manipular dados -> exec na query
// retornar dados -> query