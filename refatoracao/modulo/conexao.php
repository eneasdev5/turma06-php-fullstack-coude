<?php

$servername = "servername";
$username = "username";
$password = "password";
$dbname = "dbname";
$conexao = null;


function getConnection()
{
    global $servername;
    global $username;
    global $password;
    global $dbname;
    global $conexao;


    try {
        if ($conexao != null) {
            return $conexao;
        }
        $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}
