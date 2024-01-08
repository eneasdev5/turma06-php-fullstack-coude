<?php

$conexao = null;

function getConnection(
    $servername = '127.0.0.1',
    $username = 'root',
    $password = '',
    $dbname = 'crud'
) {
    global $conexao;
    try {
        if ($conexao == null) {
            $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
        }
        return $conexao;
    } catch (PDOException $th) {
        echo $th->getMessage();
        return null;
    }
}
