<?php
$hostname = "localhost"; // endereço do servidor MySQL
$usuario = "root"; // nome de usuário do MySQL
$password = ""; // senha do MySQL
$database = "clientes"; // nome do banco de dados

// Cria uma conexão com o MySQL
$mysqli = new mysqli($hostname, $usuario, $password, $database);

// Verifica se houve erro na conexão
if (!$mysqli->errno) {
    echo"Erro na conexão";
}else {
    echo"Conexão bem sucedida!";
}
?>
