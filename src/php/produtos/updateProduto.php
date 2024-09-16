<?php 

include '../../database/conexao.php';

date_default_timezone_set('UTC');

$idProduto = $_POST['idProdutoData'];
$codigoProduto = $_POST['codigoProdutoData'];
$nomeProduto = $_POST['nomeProdutoData'];
$categoria = $_POST['categoriaData'];
$fornecedor = $_POST['fornecedorData'];
$quantidade = $_POST['quantidadeData'];
$valorVenda = $_POST['valorVendaData'];


$updateQuery = "UPDATE `produtos` SET `codigoProduto`='$codigoProduto',`nomeProduto`='$nomeProduto',`categoria`='$categoria',`fornecedor`='$fornecedor',`quantidade`='$quantidade',`valorVenda`='$valorVenda',`updatedAt`= NOW() WHERE idProduto = '$idProduto'";
$exeQuery = mysqli_query($conexao, $updateQuery);

echo 'Produto Atualizado com Sucesso!';

?>