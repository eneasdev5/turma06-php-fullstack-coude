<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Login</title>
    <style>
        h1 {
            padding: 20px;
            text-align: center;
        }

        form {
            width: 70%;
            margin: 50px auto 0px auto;
        }

        form label {
            display: block;
            text-align: center;
        }

        .mb-1 {
            margin-bottom: 10px;
        }

        .mb-2 {
            margin-bottom: 20px;
        }

        .p-1 {
            padding: 10px;
        }

        form input[type='text'],
        input[type='password'] {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        form input[type='submit'] {
            display: block;
            border: 0px;
            padding: 10px;
            margin-left: auto;
            border-radius: 5px;
            background-color: blue;
            color: white;
            font-weight: 700;
        }

        form input[type='submit']:hover {
            cursor: pointer;
            background-color: #19197e;
            transition: 1700ms;
            color: #9c9c9c;
        }

        body {
            background: url('./images.jpeg') no-repeat;
            background-size: cover;

        }
    </style>
</head>

<body>
    <h1>Painel de Acesso</h1>
    <form action="./login.php">
        <label for="" class="p-1">
            Usuário
        </label><input class="mb-1 p-1" type="text" name="login">

        <label for="" class="p-1">
            Senha:
        </label><input type="password" class="p-1" name="senha">

        <input type="submit" value="Logar">
    </form>

</body>

</html>