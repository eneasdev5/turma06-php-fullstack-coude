<?php

include(__DIR__ . '/modulo_mysql/classes/MysqlConnect.php');
$mysql = new MysqlConnect;



if (isset($_GET['id']) && !empty($_GET['id'])) {
    $table_id = (int)$_GET['id'];
    $mysql->deleteTable('usuarios', $table_id);

    // redireciona usuario para outra pagina
    header("Location: /curso-fullstack-php/turma06-php-fullstack-coude/aula15/gestor-pessoas/visualizar.php");
}
