<?php

include(__DIR__ . '/modulo_mysql/delete.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $table_id = (int)$_GET['id'];
    deleteTable('usuario', $table_id);

    // redireciona usuario para outra pagina
    header("Location: /curso-fullstack-php/turma06-php-fullstack-coude/aula9/gestor-pessoas/visualizar.php");
}
