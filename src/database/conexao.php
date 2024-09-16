<?php
$servername = "localhost"; // Endereco local da nosso servidor.
$database = "controlex"; // Nome do Banco de Dados criado.
$username = "root"; // Usuário padrão do MySql
$password = ""; // Senha de conexão do Banco de Dados

//Criando conexão com BANCO de Dados MYSQL
$conexao = mysqli_connect($servername, $username, $password, $database);
?>