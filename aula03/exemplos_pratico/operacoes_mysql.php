<?php




/**
 * CRUD: Create Connect ao Mysql
 */
$conexao = null;
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "crud";
try {
  $conexao = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
  var_dump($exception->getMessage());
}

$action = $_GET['action'];

switch ($action) {
  case 'select':
    /**
     * CRUD: Select Table
     */
    try {
      $stmt = $conexao->prepare("SELECT * FROM usuarios");
      $stmt->execute();
      $result = $stmt->fetchAll();

      foreach ($result as $user) {
        echo "<p>ID: {$user['id']}</p>";
        echo "<p>Nome: {$user['nome']}</p>";
        echo "<p>Email: {$user['email']}</p>";
        echo "<p>Nickname: {$user['nickname']}</p><hr>";
      }
    } catch (PDOException $th) {
      echo $th->getMessage();
    }
    break;
  case 'insert':
    /**
     * CRUD: Insert Table
     */
    $pessoa = [
      'nome' => 'Pedro',
      'email' => 'pedro123',
      'nickname' => 'pedro13',
      'senha' => 'pedro13'
    ];

    try {
      $stmt = $conexao->prepare("INSERT INTO usuarios (nome,email,nickname,senha) VALUES (:nome,:email,:nickname,:senha)");
      $stmt->bindValue(":nome", $pessoa['nome']);
      $stmt->bindValue(":email", $pessoa['email']);
      $stmt->bindValue(":nickname", $pessoa['nickname']);
      $stmt->bindValue(":senha", $pessoa['senha']);
      $stmt->execute();

      echo "<p>user criado com sucesso!!</p>";
    } catch (PDOException $th) {
      echo $th->getMessage();
    }
    break;
  case 'update':
    /**
     * CRUD: UPDATE Table
     */
    $pessoa = [
      'nome' => 'Marcos',
      'email' => 'marcos@test.com',
      'nickname' => 'marcos123',
      'senha' => 'marcos13'
    ];
    try {
      $query = "UPDATE usuarios SET nome=:nome,email=:email,nickname=:nickname,senha=:senha WHERE id=:id";
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(":nome", $pessoa['nome']);
      $stmt->bindValue(":email", $pessoa['email']);
      $stmt->bindValue(":nickname", $pessoa['nickname']);
      $stmt->bindValue(":senha", $pessoa['senha']);
      $stmt->bindValue(":id", $pessoa['id']);
      $stmt->execute();

      echo '<p>Dados do usuário atualizado com sucesso!!!</p>';
    } catch (PDOException $th) {
      echo $th->getMessage();
    }
    break;
  case 'delete':
    /*
     * DB: Delete Table
     */
    $userID = (int)$_GET['id'];
    try {
      $stmt = $conexao->prepare("DELETE FROM usuarios WHERE id=:id");
      $stmt->bindValue(":id", $userID);
      $stmt->execute();
      echo '<p>Usuario removido com sucesso</p>';
    } catch (PDOException $th) {
      echo $th->getMessage();
    }
    break;
  default:
    $conexao = null;
    break;
}
