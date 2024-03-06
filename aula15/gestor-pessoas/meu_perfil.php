<?php // back-end
include('./modulo_mysql/classes/MysqlConnect.php');
$sql = new MysqlConnect();
$usuario = $_GET['id'] ?? 0;

$dados = $sql->joinData($usuario);
$path_image = './static/image/usuario-perfil-site.png';

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <title>Página de Cadastro</title>
    <meta charset="utf8" />
    <link rel="stylesheet" href="./static/stylesheets/global.css">
    <link rel="stylesheet" href="./static/stylesheets/meu_perfil.css">
</head>

<body>
    <!-- Body Principal -->
    <main class="cMainEl">
        <!-- Header -->
        <nav class="nav-menu">
            <ul class="menu">
                <li><a href="./visualizar.php">Visualizar Usuário</a></li>
            </ul>
        </nav>

        <!-- Body Internal -->
        <section class="section-body-content">
            <!-- <div class="message-backend">
                <h3>Mensagem do backend</h3>
            </div> -->

            <div class="perfil-title">
                <h1>Seu Perfil</h1>
            </div>
            <div class="perfil-usuario">
                <div class="perfil-usuario-image">
                    <img src="<?= $path_image ?>" alt="Transforme Campo de batalha optimus prime" title="Transforme Campo de batalha optimus prime">
                </div>

                <div class="perfil-usuario-meus-dados">
                    <div class=" perfil-usuario-meu-endereco">
                        <p>Nome: <?= $dados->nome ?></p>
                        <p>Email: <?= $dados->email ?></p>
                        <p>NickName: <?= $dados->nickname ?></p>
                        <p>Telefone: <?= $dados->numero_telefone ?></p>
                    </div>
                    <div class="perfil-usuario-meu-endereco">
                        <p>Bairro: <?= $dados->bairro ?></p>
                        <p>CEP: <?= $dados->cep ?></p>
                        <p>Número°: <?= $dados->numero ?></p>
                        <p>Complemento: <?= $dados->complemento ?></p>
                        <p>Cidade: <?= $dados->cidade ?></p>
                        <p>Estado: <?= $dados->estado ?></p>
                    </div>
                </div>
                <div class="perfil-usuario-gerenciar">
                    <p>
                        <a href="./editar_usuario.php?id=<?= $dados->id ?>">Editar Meus Dados</a>
                    </p>
                    <p>
                        <a href="./excluir_usuario.php?id=<?= $dados->id ?>">Remover Conta</a>
                    </p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer_page">
            <p>&copy; Todos Direito reservados - Ano 2023</p>
        </footer>
    </main>

</body>

</html>