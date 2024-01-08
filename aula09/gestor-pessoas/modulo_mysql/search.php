<?php

include(__DIR__ . '/conexao.php');


function searchTable(string $tablename = 'usuario')
{
    try {
        $db = getConnection();

        $stmt = $db->prepare("select u.id, u.nome, u.nickname, u.email, e.numero, e.bairro, e.cidade from usuario u join endereco e on e.usuario_id = u.id");
        $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    } catch (\PDOException $th) {
        echo '<p>' . $th->getMessage() . '<br>';
        return [];
    } finally {
        $db = null;
    }
}

function searchTableByID(string $tablename = 'usuario', int $usuario_id)
{
    try {
        $db = getConnection();
        $stmt = $db->prepare("SELECT * FROM {$tablename} WHERE id=:id");
        $stmt->bindParam(':id', $usuario_id, PDO::PARAM_INT);

        $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    } catch (\PDOException $th) {
        echo '<p>' . $th->getMessage() . '<br>';
        return [];
    } finally {
        $db = null;
    }
}

function innerJoinTables(array $table = [], int $usuario_id)
{
    try {
        $db = getConnection();
        $stmt = $db->prepare("SELECT u.id,u.nome,u.nickname,u.email, t.numero_telefone, e.cep,e.rua,e.numero,e.complemento,e.bairro,e.cidade,e.estado  FROM usuario u INNER JOIN telefone t ON t.usuario_id=u.id INNER JOIN endereco e on e.usuario_id=u.id WHERE u.id=:id");
        $stmt->bindParam(':id', $usuario_id, PDO::PARAM_INT);

        $stmt->execute();
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);
        return $dados;
    } catch (\PDOException $th) {
        echo '<p>' . $th->getMessage() . '<br>';
        return [];
    } finally {
        $db = null;
    }
}

function joinData(array $tables = [], int $usuario_id): object
{
    $dados = innerJoinTables($tables, $usuario_id);
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
