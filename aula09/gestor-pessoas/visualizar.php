<?php
include('./modulo_mysql/search.php');
$usuarios = searchTable();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página de Cadastro</title>
    <meta charset="utf8" />
    <link rel="stylesheet" href="./static/stylesheets/global.css">
</head>

<body>
    <!-- Body Principal -->
    <main class="cMainEl">
        <!-- Header -->
        <nav class="nav-menu">
            <ul class="menu">
                <li><a href="./index.php">Início</a></li>
                <li><a href="./cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="./visualizar.php">Visualizar Usuário</a></li>
            </ul>
        </nav>

        <!-- Body Internal -->
        <section class="section-body-content">
            <div class="header_table">
                <h1>Usuários Registrados</h1>
            </div>

            <div class="responsive">
                <table class="tabela_de_registros">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>NickName</th>
                            <th>Numero</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Ver Perfil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($usuarios) && !empty($usuarios)) : ?>
                            <?php foreach ($usuarios as $usuario) : ?>
                                <tr>
                                    <td><?= $usuario['nome'] ?></td>
                                    <td><?= $usuario['email'] ?></td>
                                    <td><?= $usuario['nickname'] ?></td>
                                    <td><?= $usuario['numero'] ?></td>
                                    <td><?= $usuario['bairro'] ?></td>
                                    <td><?= $usuario['cidade'] ?></td>
                                    <td>
                                        <a class="color-achor-editar" href="./meu_perfil.php?id=<?= $usuario['id'] ?>">Ver
                                            Perfil</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td style='text-align:center;' colspan="7">Não há usuários registrados</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>

                </table>
            </div>
        </section>
        <!-- Footer -->
        <footer class="footer_page">
            <p>&copy; Todos Direito reservados - Ano 2023</p>
        </footer>
    </main>
</body>

</html>