<?php

include(__DIR__ . '/conexao.php');


function insertTable(array $table, array $dados): ?string {
    $db = getConnection();
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
