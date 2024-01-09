<?php


function buscar(int $usuario_id = 0)
{
    $conexao = getConnection();
    $table = 'usuario';
    try {
        $query = "SELECT * FROM $table";
        if ($usuario_id != 0) {
            $query .= " WHERE id=:id";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(':id', $usuario_id);
        } else {
            $stmt = $conexao->prepare($query);
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $th) {
        echo $th->getMessage() . '<br>';
        return [];
    } finally {
        $conexao = null;
    }
}
