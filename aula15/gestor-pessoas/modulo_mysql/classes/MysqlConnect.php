<?php

class MysqlConnect
{
    public $conexao;
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $message;

    public function __construct()
    {
        $this->conexao = null;
        $this->servername = "127.0.0.1";
        $this->username = "root";
        $this->password = "";
        $this->dbname = 'crud';
    }

    public function getInstance(): PDO
    {
        try {
            if ($this->conexao == null) {
                $this->conexao = new PDO(
                    "mysql:host=$this->servername;dbname=$this->dbname",
                    $this->username,
                    $this->password
                );
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $this->conexao;
        } catch (\PDOException $th) {
            return null;
        }
    }


    public function searchTable(string $tablename = 'usuarios')
    {
        try {
            $db = $this->getInstance();
            $stmt = $db->prepare("select u.id, u.nome, u.nickname, u.email, e.numero, e.bairro, e.cidade from {$tablename} u join enderecos e on e.usuario_id = u.id");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);;
        } catch (\PDOException $th) {
            echo '<p>' . $th->getMessage() . '<br>';
            return [];
        } finally {
            $db = null;
        }
    }

    public function insertTable(array $table, array $dados): ?string
    {
        $db = $this->getInstance();
        try {
            // insert dados na tabela de usuário
            $query = "INSERT INTO {$table[0]} (nome, nickname, email, senha) VALUES(:nome, :nickname,:email,:senha)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':nome', $dados['cnNome']);
            $stmt->bindParam(':nickname', $dados['cnNickname']);
            $stmt->bindParam(':email', $dados['cnEmail']);
            $stmt->bindParam(':senha', password_hash($dados['cnPassword'], PASSWORD_DEFAULT));
            $stmt->execute();
            $lastInsertIDUser = $db->lastInsertId(); // obtem o id do usuario inserido

            // insert table endereco
            $query = "INSERT INTO {$table[1]} (id,cep, rua, numero, complemento, bairro, cidade, estado,usuario_id) VALUES (default, :cep, :rua, :numero, :complemento, :bairro, :cidade, :estado,:usuario_id)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':cep', $dados['cnCep']);
            $stmt->bindParam(':rua', $dados['cnRua']);
            $stmt->bindParam(':numero', $dados['cnNumero_residencial']);
            $stmt->bindParam(':complemento', $dados['cnComplemento']);
            $stmt->bindParam(':bairro', $dados['cnBairro']);
            $stmt->bindParam(':cidade', $dados['cnCidade']);
            $stmt->bindParam(':estado', $dados['cnEstado']);
            $stmt->bindParam(':usuario_id', $lastInsertIDUser);
            $stmt->execute();

            // insert table telefone
            $query = "INSERT INTO {$table[2]} (numero_telefone, usuario_id) VALUES (:numero_telefone, :usuario_id)";
            $stmt = $db->prepare($query);
            foreach ($dados['cnTelefone'] as $value) {
                $stmt->bindParam(':numero_telefone', $value);
                $stmt->bindParam(':usuario_id', $lastInsertIDUser);
                $stmt->execute();
            }
            return null;
        } catch (\PDOException $th) {
            echo '<p>' . $th->getMessage() . '</p>';
            return '<p>' . $th->getMessage() . '</p>';
        }
    }

    public function searchTableByID(string $tablename = 'usuarios', int $usuario_id)
    {
        try {
            $db = $this->getInstance();
            $stmt = $db->prepare("SELECT * FROM {$tablename} WHERE id=:id");
            $stmt->bindParam(':id', $usuario_id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $th) {
            echo '<p>' . $th->getMessage() . '<br>';
            return [];
        } finally {
            $db = null;
        }
    }

    public function innerJoinTables(int $usuario_id)
    {
        try {
            $db = $this->getInstance();
            $stmt = $db->prepare("SELECT u.id,u.nome,u.nickname,u.email, t.numero_telefone, e.cep,e.rua,e.numero,e.complemento,e.bairro,e.cidade,e.estado  FROM usuarios u INNER JOIN telefones t ON t.usuario_id=u.id INNER JOIN enderecos e on e.usuario_id=u.id WHERE u.id=:id");
            $stmt->bindParam(':id', $usuario_id, PDO::PARAM_INT);

            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (\PDOException $th) {
            echo '<p>' . $th->getMessage() . '<br>';
            return [];
        } finally {
            $db = null;
        }
    }

    public function joinData(int $usuario_id): object
    {
        $dados = $this->innerJoinTables($usuario_id);
        $objeto = new stdClass;
        $objeto->id = $dados['id'];
        $objeto->nome = $dados['nome'];
        $objeto->email = $dados['email'];
        $objeto->nickname = $dados['nickname'];
        $objeto->numero_telefone = $dados['numero_telefone'];
        $objeto->cep = $dados['cep'];
        $objeto->rua = $dados['rua'];
        $objeto->numero = $dados['numero'];
        $objeto->complemento = $dados['complemento'];
        $objeto->bairro = $dados['bairro'];
        $objeto->cidade = $dados['cidade'];
        $objeto->estado = $dados['estado'];

        return $objeto;
    }

    /**
     * Method to the search the users
     */
    public function updateTables(array $dados = null, int $usuario_id): void
    {
        try {
            $db = $this->getInstance();
            $stmt = $db->prepare('UPDATE usuarios u SET u.nome=:nome, u.nickname=:nick, u.email=:email WHERE id=:id');
            $stmt->bindParam(':nome', $dados['cnNome']);
            $stmt->bindParam(':nick', $dados['cnNickname']);
            $stmt->bindParam(':email', $dados['cnEmail']);
            $stmt->bindParam(':id', $usuario_id);
            $stmt->execute();

            $stmt = $db->prepare('UPDATE telefones SET numero_telefone=:numero_telefone  WHERE usuario_id=:usuario_id');
            $stmt->bindParam(':numero_telefone', $dados['cnTelefones'][0]);
            $stmt->bindParam(':usuario_id', $usuario_id);
            $stmt->execute();


            $stmt = $db->prepare('UPDATE enderecos SET cep=:cep, rua=:rua, numero=:numero, complemento=:complemento, bairro=:bairro, cidade=:cidade, estado=:estado WHERE usuario_id=:usuario_id');
            $stmt->bindParam(':cep', $dados['cnCep']);
            $stmt->bindParam(':rua', $dados['cnRua']);
            $stmt->bindParam(':numero', $dados['cnNumero_residencial']);
            $stmt->bindParam(':complemento', $dados['cnComplemento']);
            $stmt->bindParam(':bairro', $dados['cnBairro']);
            $stmt->bindParam(':cidade', $dados['cnCidade']);
            $stmt->bindParam(':estado', $dados['cnEstado']);
            $stmt->bindParam(':usuario_id', $usuario_id);
            $stmt->execute();
        } catch (\Exception $th) {
            echo '<p>' . $th->getMessage() . '</p>';
        } finally {
            $db = null;
        }
    }

    /**
     * Method de Delete
     */
    public function deleteTable(string $table, int $table_id): ?string
    {
        $db = $this->getInstance();
        try {
            $query = "DELETE FROM {$table} WHERE id=:table_id";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':table_id', $table_id);
            $stmt->execute();

            return null;
        } catch (\PDOException $th) {
            echo '<p>' . $th->getMessage() . '</p>';
            return '<p>' . $th->getMessage() . '</p>';
        }
    }
}
