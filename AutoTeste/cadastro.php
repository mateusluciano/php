<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <header>
        <h1>Iniciando Testes!</h1>
    </header>
    <main>
        <?php 
            require_once "conexao.php";
        ?>

        <p>Testes com Banco de Dados</p>

        <?php 
            $nome = $_POST["nome"];
            $idade = $_POST["number"];

            echo"<p>Olá, $nome! Você tem $idade anos de idade!</p>";
        ?>

        <?php 
            $sql = "INSERT INTO nomeidade (nome, idade) VALUES ('$nome', '$idade')";
        ?>
    </main>
</body>
</html>