<?php


spl_autoload_register(function ($class_name) {
    $path = './modulo' . DIRECTORY_SEPARATOR . $class_name . '.php';
    if (file_exists($path)) {
        require $path; // 'User.php'
    } elseif ('./src' . DIRECTORY_SEPARATOR . $class_name . '.php') {
        require './src/' . $class_name . '.php';
    }
});
