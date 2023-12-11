<?php

// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "crud";

// $pessoa = ['firstname' => 'Pedro', 'nickname' => 'pedro123', 'password' => 'pedro13'];

// try {

//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   $stmt = $conn->prepare("INSERT INTO users (firstname, nickname, password) VALUES (:firstname, :nickname, :password)");
//   $stmt->bindParam(':firstname', $pessoa['firstname']);
//   $stmt->bindParam(':nickname', $pessoa['nickname']);
//   $stmt->bindParam(':password', $pessoa['password']);
//   $stmt->execute();

//   echo "user criado com sucesso!!";
// } catch (PDOException $th) {
//   echo $th->getMessage();
// }



// select 
$conn = null;

function getConecion()
{
  global $conn;

  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "crud";


  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch (PDOException $th) {
    return null;
  }
}

$pessoa = ['firstname' => 'John', 'nickname' => 'John', 'password' => '123'];

try {
  if ($conn == null) { // singleton
    echo 'abrindo a conexão<br>';
    $conn = getConecion();
  }

  $stmt = $conn->prepare("SELECT * FROM users");
  $stmt->execute();

  $result = $stmt->fetchObject();

  foreach ($result as $user) {
    echo "<p>ID: {$user['id']}, Firstname: {$user['firstname']}, Nickname: {$user['nickname']}</p>";
  }
} catch (PDOException $th) {
  echo $th->getMessage();
}
// 



$pessoa = ['firstname' => 'John', 'nickname' => 'John', 'password' => '123'];

try {
  global $conn;
  if ($conn == null) {
    echo 'abrindo a conexão<br>';
    $conn = getConecion();
  }

  $stmt = $conn->prepare("select u.id as 'user_id', u.firstname, u.nickname, t.id as 'telefone_id', t.numero_telefone from users as u join telefone as t on u.id = t.id_usuario;");
  $stmt->execute();

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  echo '<pre>';
  foreach ($result as $user) {
    print_r($user);
    // echo "<p>ID: {$user['id']}, Firstname: {$user['firstname']}, Nickname: {$user['nickname']}</p>";
  }
} catch (PDOException $th) {
  echo $th->getMessage();
}


// try {
//   global $conn;
//   if ($conn == null) {
//     $conn = getConecion();
//   }

//   $stmt = $conn->prepare("delete from telefone where id_usuario =1 limit 1");
//   $stmt->execute();

//   echo 'Usuario removido com sucesso';
// } catch (PDOException $th) {
//   echo $th->getMessage();
// }