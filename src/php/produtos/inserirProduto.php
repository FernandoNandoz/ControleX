<?php

include '../../database/conexao.php';

date_default_timezone_set('UTC');

$codigoProduto = $_POST['codigoProdutoData'];
$nomeProduto = $_POST['nomeProdutoData'];
$categoria = $_POST['categoriaData'];
$fornecedor = $_POST['fornecedorData'];
$quantidade = $_POST['quantidadeData'];
$valorVenda = $_POST['valorVendaData'];


$queryInsert = "INSERT INTO `produtos`(`codigoProduto`, `nomeProduto`, `categoria`, `fornecedor`, `quantidade`, `valorVenda`, `createdAt`, `updatedAt`) VALUES ('$codigoProduto', '$nomeProduto', '$categoria', '$fornecedor', '$quantidade', '$valorVenda', NOW(), NOW())";

$inserirSql = mysqli_query($conexao, $queryInsert);

echo 'Produto Cadastrado com Sucesso!';
?>

