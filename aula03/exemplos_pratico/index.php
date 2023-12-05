<?php 

// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// // define a variável de conexão
// $conn = null;

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=crud", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }





$servername = "127.0.0.1";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=crud", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM nome_tabela");
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($res);
    
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}








// UPDATE USUARIOS
$servername = "127.0.0.1";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=crud", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("update nome_tabela SET campo1=:valor1, campo2=:valor WHERE id=:valor3");
    $stmt->bindParam(':valor1', $var1);
    $stmt->bindParam(':valor2', $var2);
    $stmt->bindParam(':valor3', $var3);
    $stmt->execute();
    var_dump($res);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}






// DELETE USUARIOS
$servername = "127.0.0.1";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=crud", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = 10;
    $stmt = $conn->exec("delete from nome_tabela where id='$id'");
   
    echo 'Usuario deletado com sucesso';
    
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}












// CRIATE USUARIO
$servername = "127.0.0.1";
$username = "root";
$password = "";

$firstname = "Jackon";
$nickname = "JackonSantos";
$password = "1236549874312";

try {
    $conn = new PDO("mysql:host=$servername;dbname=crud", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO users (firstname, nickname, password) VALUES (:firstname, :nickname, :password)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':nickname', $nickname);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    echo 'Usuario criado com sucesso';

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}















