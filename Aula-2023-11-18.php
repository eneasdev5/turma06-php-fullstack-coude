<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="nome">Digite seu Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="senha">Sua Senha</label>
        <input type="password" name="senha" id="senha" />

        <input type="file" name="arquivos[]" id="arquivos" multiple>
        <input type="submit" value="Send">
    </form>
    
    <?php
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "POST") {
            echo "<p>$method</p>";
            var_dump($_POST);
            if(count($_FILES)){ 
                var_dump($_FILES['arquivos']['name']);
            }
        } else {
            echo "<p>$method</p>";
            var_dump($_GET);
        }

        // verificar qual tipo de requisição esta vindo
        // pega os dados da variavel superglobal seguindo o tipo de request


        // $method = $_SERVER['REQUEST_METHOD'];
        // if($method == 'POST') {
        //     echo "<p>request do tipo $method</p>";
            // var_dump($_POST);
            // echo '<br><pre>';
            // print_r($_FILES['arquivos']['name'][0]);
            // print_r($_FILES['arquivos']['type'][0]);
            // print_r($_FILES['arquivos']['size'][0]);
            // echo '</pre>';
        // }
        // if($method == 'GET') {
        //     echo "<p>request do tipo: $method</p>";
        //     var_dump($_GET);
        //     echo '<br>';
        //     var_dump($_FILES);
        // }
    ?>
</body>
</html>

