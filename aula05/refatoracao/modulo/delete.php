<?php


function Delete(int $usuario_id): bool
{
    $conexao = getConnection();
    try {
        $stmt = $conexao->prepare("DELETE FROM usuario WHERE id=:id");
        $stmt->bindValue(':id', $usuario_id);

        return $stmt->execute();
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return false;
    } finally {
        $conexao = null;
    }
}