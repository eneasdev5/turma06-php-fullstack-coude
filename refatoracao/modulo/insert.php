<?php

function insertTable(array $dados): int
{
    $conexao = getConnection();
    try {
        $stmt = $conexao->prepare("INSERT INTO usuario (id, nome, cep, rua, numero, complemento, bairro, cidade, estado) VALUES (default, :nome,:cep, :rua,:numero,:complemento, :bairro,:cidade, :estado)");
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':cep', $dados['cep']);
        $stmt->bindValue(':rua', $dados['rua']);
        $stmt->bindValue(':numero', $dados['numero']);
        $stmt->bindValue(':complemento', $dados['complemento']);
        $stmt->bindValue(':bairro', $dados['bairro']);
        $stmt->bindValue(':cidade', $dados['cidade']);
        $stmt->bindValue(':estado', $dados['estado']);

        $stmt->execute();
        $last_id = $conexao->lastInsertId();
        return $last_id;
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return 0;
    } finally {
        $conexao = null;
    }
}
