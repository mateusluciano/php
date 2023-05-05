<?php
$host = "localhost"; // endereço do servidor MySQL
$user = "root"; // nome de usuário do MySQL
$password = ""; // senha do MySQL
$database = ""; // nome do banco de dados

// Cria uma conexão com o MySQL
$conn = mysqli_connect($host, $user, $password, $database);

// Verifica se houve erro na conexão
if (!$conn) {
  die("Não foi possível conectar ao banco de dados: " . mysqli_connect_error());
}
?>
