<?php

//Variaveis para o banco de dados local

try {
    $conexao = new PDO('mysql:host-localhost;dbname-pdv;charset=utf8',
    'root', 'admin');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Erro -> <p>' .$e;
}

?>