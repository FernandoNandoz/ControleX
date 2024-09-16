<?php

include '../../database/conexao.php';

date_default_timezone_set('UTC');

$categoria = $_POST['categoriaData'];


$queryInsert = "INSERT INTO `categoria`(`nomeCategoria`, `createdAt`, `updatedAt`) VALUES ('$categoria', NOW(), NOW())";

$inserirSql = mysqli_query($conexao, $queryInsert);

echo 'Categoria Cadastrada com Sucesso!';
?>