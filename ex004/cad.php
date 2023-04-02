<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
            // var_dump($_GET); // JUNÇÃO DAS SUPER-GLOBAIS - $_GET $_POST $_COOKIES
            $nome = $_REQUEST["nome"];
            $sob = $_REQUET["sob"];
            echo "<p>Olá, $nome $sob!</p>";
        ?>
    </main>
</body>
</html>