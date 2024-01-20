<?php


if (isset($_SESSION['usuario'])) {
    unset($_SESSION['usuario']);
}

header("location: ./login_view.php?msg=logout-realizado-com-sucesso!");
