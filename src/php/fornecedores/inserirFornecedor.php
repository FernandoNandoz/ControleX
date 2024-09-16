<?php

include '../../database/conexao.php';

$razaoNomeEmpresarial = $_POST['razaoSocialData'];
$nomeFantasia = $_POST['nomeFantasiaData'];
$tipoFornecedor = $_POST['tipoFornecedorData'];
$marca = $_POST['marcaData'];
$representante = $_POST['representanteData'];
$contato = $_POST['contatoData'];


$queryInsert = "INSERT INTO `fornecedor`(`razaoNomeEmpresarial`, `nomeFantasia`, `tipoFornecedor`, `marca`, `representante`, `contato`, `createdAt`, `updatedAt`) VALUES ('$razaoNomeEmpresarial', '$nomeFantasia', '$tipoFornecedor', '$marca', '$representante', '$contato', NOW(), NOW())";

$inserirSql = mysqli_query($conexao, $queryInsert);

echo 'Fornecedor Cadastrado com Sucesso!';
?>