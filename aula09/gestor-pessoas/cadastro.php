<?php

include(__DIR__ . '/modulo_mysql/insert.php');

/*
Array
(
    [cnNome] =>
    [cnEmail] =>
    [cnNickname] =>
    [cnPassword] =>
    [cnCep] =>
    [cnRua] =>
    [cnNumero_residencial] =>
    [cnComplemento] =>
    [cnBairro] =>
    [cnCidade] =>
    [cnEstado] =>
    [cnTelefone] => Array
        (
            [0] =>
            [1] =>
            [2] =>
        )
)
*/

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!in_array('', $_POST)) {
        $register_result = insertTable(['usuario', 'endereco', 'telefone'], $_POST);
        if ($register_result == null) {
            $register_result = "Usuário inserido com sucesso!";
        }
        reset($_POST);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página de Cadastro</title>
    <meta charset="utf8" />
    <link rel="stylesheet" href="./static/stylesheets/global.css">
</head>

<body>
    <!-- Body -->
    <main class="cMainEl">
        <!-- Header -->
        <nav class="nav-menu">
            <ul class="menu">
                <li><a href="./index.php">Início</a></li>
                <li><a href="./cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="./visualizar.php">Visualizar Usuário</a></li>
            </ul>
        </nav>

        <!-- section body content -->
        <section class="section-body-content">
            <div class="cx_main_form_cadastrar">
                <h1>Cadastrar Um Novo Usuário</h1>
            </div>
            <!-- <div class="message_error">
                <h3>message </h3>
            </div> -->
            <?php if (!empty($register_result)) : ?>
            <div class="message_error">
                <h3><?= $register_result ?></h3>
            </div>
            <?php endif; ?>

            <form id="main_form_cadastrar" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div>
                    <input type="text" autofocus id="ciNome" name="cnNome" placeholder="Nome completo" />
                </div>
                <div>
                    <input type="email" id="ciNome" name="cnEmail" placeholder="E-mail" />
                </div>
                <div>
                    <input type="text" id="ciNickname" name="cnNickname" placeholder="usuário acesso" />
                </div>
                <div>
                    <input type="password" id="ciPassword" name="cnPassword" placeholder="senha acesso" />
                </div>

                <div>
                    <input type="text" name="cnCep" id="ciCep" placeholder="00000-000">
                </div>

                <div>
                    <input type="text" id="ciRua" name="cnRua" placeholder="Rua, AV., Travessa" />
                </div>

                <div>
                    <input type="number" id="ciNumero_residencial" name="cnNumero_residencial" placeholder="Número°" />
                </div>

                <div>
                    <input type="text" id="ciComplemento" name="cnComplemento" placeholder="Complemento" />
                </div>

                <div>
                    <input type="text" id="cibairro" name="cnBairro" placeholder="Bairro" />
                </div>

                <div>
                    <input type="text" id="ciCidade" name="cnCidade" placeholder="Cidade" />
                </div>

                <div>
                    <input type="text" id="ciEstado" name="cnEstado" placeholder="Estado, ex: BA, SP, RJ" />
                </div>

                <div id="telefones">
                    <div class='layoutTelefone'>
                        <input type="number" id="ciTelefone" name="cnTelefone[]" placeholder="(00) 00000-0000">
                        <button type="button" id="ciButtonAddTel">Adicionar Telefone</button>
                    </div>
                </div>
                <div class="btn_submit_form_cad">
                    <button type="submit">Cadastrar</button>
                </div>

            </form>
        </section>

        <!-- Footer -->
        <footer class="footer_page">
            <p>&copy; Todos Direito reservados - Ano 2023</p>
        </footer>
    </main>

    <script src="./static/javascript/cadastrar.js"></script>

</body>

</html>