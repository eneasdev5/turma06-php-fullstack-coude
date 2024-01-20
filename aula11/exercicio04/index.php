<?php


define("URI_BASE", "/curso-fullstack-php/turma06-php-fullstack-coude/aula11/exercicio04");

switch ($_GET['page']) {
    case "login":
        require "./login_view.php";
        break;
    case "logout":
        require './logout.php';
        break;
    case "logout":
        require './dashboad.php';
        break;
    default:
        header("location: ?page=login");
}
