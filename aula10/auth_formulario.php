<?php

/*
    Aqui vamos definir a senha que será uma hash 
    e que após isso irá para uma tabela de banco de dados
*/
$senha_hash = 'senha-sera-salva-no-db';

// gerando uma hash da senha que veio de um possível formulário
$hash_senha = password_hash($senha_hash, PASSWORD_DEFAULT);


/* 
    Uma vez a senha já foi salva na tabela do banco como uma hash 
    vamos analisar a senha que veio do formulário
*/
$senhas = array("senha-do-formulario", "senha-sera-salva-no-db", "admin123");
foreach ($senhas as $senha) {
    if (verificando_senha($senha, $hash_senha)) {
        echo "<p>A senha esta correta: <b style='color: green;'>\"{$senha}\"</b></p>";
    } else {
        echo "<p>Esta senha esta incorreta: <b style='color: red;'>\"{$senha}\"</b></p>";
    }
}


// faz a checagem se a senha vinda do form bate com a hash da senha no banco 
function verificando_senha(string $senha, string $hash_senha): bool
{
    return password_verify($senha, $hash_senha);
}
