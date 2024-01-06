<?php


include(__DIR__ . '/conexao.php');


function deleteTable(string $table, int $table_id): ?string
{
    $db = getConnection();
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
