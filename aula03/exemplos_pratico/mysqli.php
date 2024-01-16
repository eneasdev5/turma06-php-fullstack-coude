<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = 'crud';


$conexao = mysqli_connect($servername, $username, $password, $dbname);
if (!$conexao) { // Check connection
  die("Connection failed: " . mysqli_connect_error());
}

$action = isset($_GET['action']) ? $_GET['action'] : 'select';

switch ($action) {
  case 'select':
    /**
     * CRUD: Select Table
     */
    $sql = "SELECT * FROM usuarios";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) > 0) {
      while ($usuario = mysqli_fetch_assoc($result)) {
        echo "<p>ID: {$usuario['id']}</p>";
        echo "<p>Nome: {$usuario['nome']}</p>";
        echo "<p>Email: {$usuario['email']}</p>";
        echo "<p>Nickname: {$usuario['nickname']}</p><hr>";
      }
    }
    break;
  case 'insert':
    /**
     * CRUD: Insert Table
     */
    $pessoa = [
      'nome' => 'Pedro Santana',
      'email' => 'pedro145@hotmail.com',
      'nickname' => 'pedro145',
      'senha' => 'pedro13'
    ];
    $sql = "INSERT INTO usuarios (nome,email,nickname,senha) VALUES ('{$pessoa["nome"]}','{$pessoa["email"]}','{$pessoa["nickname"]}','{$pessoa["senha"]}')";

    if (mysqli_query($conexao, $sql)) {
      echo "Table Usuario created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conexao);
    }
    break;
  case 'update':
    /**
     * CRUD: Update Table
     */
    $pessoa = [
      'id' => (int)$_GET['id'],
      'nome' => 'Pedro',
      'email' => 'pedroUp',
      'nickname' => 'pedroUp',
      'senha' => 'pedroUp'
    ];
    $sql = "UPDATE usuarios SET nome='{$pessoa['nome']}',email='{$pessoa['email']}',nickname='{$pessoa['nickname']}',senha='{$pessoa['senha']}' WHERE id='{$pessoa['id']}'";

    if (mysqli_query($conexao, $sql)) {
      echo "Table Usuario atualizada with successfully";
    } else {
      echo "Error creating table: " . mysqli_error($conexao);
    }
    break;
  case 'delete':
    /*
     * DB: Delete Table
     */
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id='{$id}'";

    if (mysqli_query($conexao, $sql)) {
      echo "<p>Table Usuario Removido with successfully</p>";
    } else {
      echo "<p>Error creating table: " . mysqli_error($conexao) . "</p>";
    }
    break;
  default:
    $conexao = null;
    break;
}
