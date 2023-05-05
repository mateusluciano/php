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
            $conn = mysqli_connect($host, $user, $password, $database);

            if (!$conn) {
                die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
            }
            
        ?>

        <p>Testes com Banco de Dados</p>


    </main>
</body>
</html>