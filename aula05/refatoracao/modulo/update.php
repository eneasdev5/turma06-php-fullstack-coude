<?php

function updateTable(array $dados)
{
    $conexao = getConnection();
    try {
        $stmt = $conexao->prepare("UPDATE usuario SET nome=:nome, cep=:cep,rua=:rua, numero=:numero, complemento=:complemento, bairro=:bairro, cidade=:cidade, estado=:estado WHERE id=:id");
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':cep', $dados['cep']);
        $stmt->bindValue(':rua', $dados['rua']);
        $stmt->bindValue(':numero', $dados['numero']);
        $stmt->bindValue(':complemento', $dados['complemento']);
        $stmt->bindValue(':bairro', $dados['bairro']);
        $stmt->bindValue(':cidade', $dados['cidade']);
        $stmt->bindValue(':estado', $dados['estado']);
        $stmt->bindValue(':id', $dados['id']);
        $status = $stmt->execute();

        return $status;
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return false;
    } finally {
        $conexao = null;
    }
}
