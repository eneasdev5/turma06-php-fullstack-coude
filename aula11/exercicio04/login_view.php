<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Acesso</title>
    <style>
    h1 {
        padding: 20px;
        text-align: center;
    }

    form {
        width: 50%;
        margin: 0px auto 0px auto;
        padding: 20px;
    }

    form input[type='text'],
    input[type='password'] {
        display: block;
        margin: 0px auto 0px auto;

    }

    form input[type='submit'] {
        display: block;
        margin-left: auto;
        border: 0;
        padding: 8px;
        border-radius: 5px;
        background: #0002FF;
        color: white;
        font-weight: 700;
    }

    form input[type='submit']:hover {
        background: #01015D;
        cursor: pointer;
        color: #2B1B1B;
    }

    form label {
        display: block;
        text-align: center;
    }

    .mb-1 {
        margin-bottom: 10px;
    }

    .p-1 {
        padding: 10px;
    }
    </style>
</head>

<body>
    <!-- 

    4: Crie um script que faz o controle de permissão dos usuários a um sistema 
    sendo que cada usuário deve ser identificado por sua categoria, por exemplo: 
        Gerente, Vendedor, Atendente de Caixa etc…, um segundo array deve ser 
        criado para representar ações que esses usuário poderá ou não executar

     -->

    <h1>Acesso Do usuário</h1>
    <form action="./login.php" method="POST">
        <label for="" class="p-1">Usuario</label>
        <input type="text" name="login" class="p-1">

        <label for="" class="p-1">Senha:</label>
        <input type="password" name="senha" class="p-1">

        <input type="submit" value="Logar">
    </form>

    <div>
        <p style="text-align:center;padding:20px;"><?= ($_GET['msg']) ? $_GET['msg'] : '' ?></p>
    </div>
</body>

</html>