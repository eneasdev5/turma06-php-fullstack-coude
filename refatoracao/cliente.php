<?php

// include('./insert.php');
include('./modulo/buscar.php');
// include('./update.php');
// include('./delete.php');


$usuario_id = intval($_GET['usuario_id']) ?? 21;
$usuario = buscar($usuario_id);

if ($usuario) {
    echo '<pre>';
    var_dump($usuario);
} else {
    echo '<p>Falha ao buscar o usuario do id ' . $usuario_id . '</p>';
}

/*
$usuario_id = 20;
$status = Delete($usuario_id);

if ($status) {
    echo '<p>Usuario do id ' . $usuario_id . ' foi removido</p>';
} else {
    echo '<p>Falha ao remover o usuario do id ' . $usuario_id . '</p>';
}

*/



/*
COMANDO DE UPDATE
$dados = [
    'nome' => 'test01',
    'cep' => '451235',
    'rua' => 'rua test',
    'numero' => '123',
    'complemento' => 'centro',
    'bairro' => 'test cidade',
    'cidade' => 'cidade test',
    'estado' => 'test cidade',
    'id' => 20
];



$status = updateTable($dados);

if ($status) {
    echo '<p>Dados atualizado com sucesso!</p>';
} else {
    echo '<p>Falha ao atualizar os dados na tabela de usuários</p>';
}
*/
 

/*
$dados = [
    'nome' => 'test01',
    'cep' => '451235',
    'rua' => 'rua test',
    'numero' => '123',
    'complemento' => 'centro',
    'bairro' => 'test cidade',
    'cidade' => 'cidade test',
    'estado' => 'test cidade'
];

$status = insertTable($dados);

if ($status) {
    echo '<p>Dados inseridos com sucesso!</p>';
} else {
    echo '<p>Falha ao inserir os dados na tabela de usuários</p>';
}*/