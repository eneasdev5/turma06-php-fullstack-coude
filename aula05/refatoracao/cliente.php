<?php

include('./modulo/conexao.php');

include('./modulo/insert.php');
include('./modulo/buscar.php');
include('./modulo/update.php');
include('./modulo/delete.php');






/* 
$usuario_id = intval($_GET['usuario_id']) ?? 21;
$usuario = buscar($usuario_id);

if ($usuario) {
    echo '<pre>';
    var_dump($usuario);
} else {
    echo '<p>Falha ao buscar o usuario do id ' . $usuario_id . '</p>';
}
*/

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



$dados = [
    'nome' => 'test03',
    'cep' => '855936',
    'rua' => 'rua test03',
    'numero' => '123',
    'complemento' => 'centro03',
    'bairro' => 'test cidade03',
    'cidade' => 'cidade test03',
    'estado' => 'test cidade03'
];

$last_id = insertTable($dados);

if ($last_id != 0) {
    echo '<pre>';
    $usuario = buscar($last_id);

    print_r($usuario);
} else {
    echo '<p>Falha ao inserir os dados na tabela de usuários</p>';
}
