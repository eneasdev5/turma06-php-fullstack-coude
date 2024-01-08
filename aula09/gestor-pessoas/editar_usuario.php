<?php
include(__DIR__ . '/modulo_mysql/search.php');
include __DIR__ . '/modulo_mysql/update.php';
$usuario_id = $_GET['id'];


$dados = innerJoinTables(['usuario', 'telefone', 'endereco'], (int)$usuario_id);
if (isset($_POST) && !empty($_POST)) {
    updateTables($_POST, $usuario_id);
    header("Location: /curso-fullstack-php/turma06-php-fullstack-coude/aula9/gestor-pessoas/meu_perfil.php?id=$usuario_id");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página de Cadastro</title>
    <meta charset="utf8" />
    <style></style>
</head>

<body>
    <!-- Body -->
    <main class="cMainEl">
        <!-- Header -->
        <nav class="nav-menu">
            <ul class="menu">
                <li><a href="./meu_perfil.php">Meu Perfil</a></li>
            </ul>
        </nav>

        <section class="section-body-content">

            <div class="cx_main_form_cadastrar">
                <h1 class="title_form_editar">Editar Usuário</h1>
            </div>

            <form id="main_form_cadastrar" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div>
                    <input type="text" autofocus id="inNome" name="cnNome" placeholder="Nome completo"
                        value="<?= $dados['nome'] ?>" />
                </div>
                <div>
                    <input type="text" autofocus id="inNickname" name="cnNickname" placeholder="Nickname"
                        value="<?= $dados['nickname'] ?>" />
                </div>
                <div>
                    <input type="email" autofocus id="inEmail" name="cnEmail" placeholder="Email"
                        value="<?= $dados['email'] ?>" />
                </div>

                <div>
                    <input type="number" name="cnTelefones[]" id="ciTelefones" placeholder="(00) 00000-0000"
                        value="<?= $dados['numero_telefone'] ?>" />
                </div>

                <div>
                    <input type="text" name="cnCep" id="ciCep" placeholder="00000-000" value="<?= $dados['cep'] ?>" />
                </div>

                <div>
                    <input type="number" id="ciNumero_residencial" name="cnNumero_residencial" placeholder="Número°"
                        value="<?= $dados['numero'] ?>" />
                </div>

                <div>
                    <input type="text" id="ciRua" name="cnRua" placeholder="Rua, AV., Travessa"
                        value="<?= $dados['rua'] ?>" />
                </div>

                <div>
                    <input type="text" id="ciComplemento" name="cnComplemento" placeholder="Complemento"
                        value="<?= $dados['complemento'] ?>" />
                </div>

                <div>
                    <input type="text" id="cibairro" name="cnBairro" placeholder="Bairro"
                        value="<?= $dados['bairro'] ?>" />
                </div>

                <div>
                    <input type="text" id="ciCidade" name="cnCidade" placeholder="Cidade"
                        value="<?= $dados['cidade'] ?>" />
                </div>

                <div>
                    <input type="text" id="ciEstado" name="cnEstado" placeholder="Estado, ex: BA, SP, RJ"
                        value="<?= $dados['estado'] ?>" />
                </div>

                <div class="btn_submit_form_cad">
                    <button type="submit">Editar</button>
                </div>
            </form>
        </section>

        <!-- Footer -->
        <footer class="footer_page">
            <p>&copy; Todos Direito reservados - Ano 2023</p>
        </footer>
    </main>
</body>

</html>
