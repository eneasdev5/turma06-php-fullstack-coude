<?php

include(__DIR__ . '/modulo_mysql/conexao.php');

function updateTables(array $dados = null, int $usuario_id): void
{

    try {
        $db = getConnection();

        $stmt = $db->prepare('UPDATE usuario u SET u.nome=:nome, u.nickname=:nick, u.email=:email WHERE id=:id');
        $stmt->bindParam(':nome', $dados['cnNome']);
        $stmt->bindParam(':nick', $dados['cnNickname']);
        $stmt->bindParam(':email', $dados['cnEmail']);
        $stmt->bindParam(':id', $usuario_id);
        $stmt->execute();

        $stmt = $db->prepare('UPDATE telefone SET numero_telefone=:numero_telefone  WHERE usuario_id=:usuario_id');
        $stmt->bindParam(':numero_telefone', $dados['cnTelefones'][0]);
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->execute();


        $stmt = $db->prepare('UPDATE endereco SET cep=:cep, rua=:rua, numero=:numero, complemento=:complemento, bairro=:bairro, cidade=:cidade, estado=:estado WHERE usuario_id=:usuario_id');
        $stmt->bindParam(':cep', $dados['cnCep']);
        $stmt->bindParam(':rua', $dados['cnRua']);
        $stmt->bindParam(':numero', $dados['cnNumero_residencial']);
        $stmt->bindParam(':complemento', $dados['cnComplemento']);
        $stmt->bindParam(':bairro', $dados['cnBairro']);
        $stmt->bindParam(':cidade', $dados['cnCidade']);
        $stmt->bindParam(':estado', $dados['cnEstado']);
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->execute();
    } catch (\Throwable $th) {
        echo '<p>' . $th->getMessage() . '</p>';
    } finally {
        $db = null;
    }
}
