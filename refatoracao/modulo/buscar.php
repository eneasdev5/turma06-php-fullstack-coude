<?php

include('./conexao.php');


function buscar(int $usuario_id)
{
    $conexao = getConnection();
    try {


        if ($usuario_id != 0) {
            $result = [];
            $stmt = $conexao->prepare("SELECT * FROM usuario WHERE id=:id");
            $stmt->bindValue(':id', $usuario_id);

            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        $result = [];
        $stmt = $conexao->prepare("SELECT * FROM usuario");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return [];
    } finally {
        $conexao = null;
    }
}
