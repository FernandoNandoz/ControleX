<?php
  include '../../database/conexao.php';
  
  $id = $_GET['id'];

  $querySelect = "SELECT * FROM `produtos` WHERE `idProduto` = " . $id;
  $dataList = mysqli_query($conexao, $querySelect);

  if (mysqli_num_rows($dataList) > 0)
  {
    foreach($dataList as $data) {

      $idProduto = $data['idProduto'];
      $codigoProduto = $data['codigoProduto'];
      $nomeProduto = $data['nomeProduto'];
      $categoria = $data['categoria'];
      $fornecedor = $data['fornecedor'];
      $quantidade = $data['quantidade'];
      $valorVenda = $data['valorVenda'];
    }
  } else {
    echo '<h5>Nenhum produto encontrado....</h5>';
  } 
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar Produto</title>

    <link rel="stylesheet" href="../../assets/dist/css/bootstrap.min.css" />
  </head>
  <body>

    <div class="container my-5" style="width: 700px">

      <h3 class="mb-2 fw-bold">Editar Produto</h3>

      <hr class="mb-4" />

      <form method="post" id="editarProduto" action="" onsubmit="update('produto'); return false;">
        <div class="mb-3">
          <label for="idProduto" class="form-label" style="display: none;">ID Produto</label>
          <input
            type="number"
            class="form-control"
            id="idProduto"
            name="idProdutoData"
            placeholder="ID Produto"
            autocomplete="off"
            required
            value="<?=$idProduto?>"
            style="display: none;"/>
        </div>

        <div class="mb-3">
          <label for="codigoProduto" class="form-label">Codigo do Produto</label>
          <input
            type="number"
            class="form-control"
            id="codigoProduto"
            name="codigoProdutoData"
            placeholder="Codigo do Produto"
            autocomplete="off"
            required
            value="<?=$codigoProduto ?>"/>
        </div>

        <div class="mb-3">
          <label for="nomeCompleto" class="form-label">Nome do Produto</label>
          <input
            type="text"
            class="form-control"
            id="nomeProduto"
            name="nomeProdutoData"
            placeholder="Nome do Produto"
            autocomplete="off"
            required
            value="<?=$nomeProduto?>"/>
        </div>

        <div class="mb-3">
          <label for="selectCategoria" class="form-label">Categoria</label>
          <select class="form-select" id="selectCategoria" name="categoriaData">
          
          <option>Selecione um categoria</option>

            <?php           
              $queryConsulta = "SELECT * FROM categoria ORDER BY nomeCategoria ASC";
              $exeQuery = mysqli_query($conexao, $queryConsulta);

              while ($resultado = mysqli_fetch_array($exeQuery)) {

                $idCategoria = $resultado['idCategoria'];
                $nomeCategoria = $resultado['nomeCategoria'];  
                
                if ($nomeCategoria == $categoria)
                {
                  echo "<option selected>$nomeCategoria</option>";
                }
                else
                {
                  echo "<option>$nomeCategoria</option>";
                }
              }
            ?>

          </select>
        </div>

        <div class="mb-3">
          <label for="selectFornecedor" class="form-label">Fornecedor</label>
          <select class="form-select" id="selectFornecedor" name="fornecedorData">

            <option>Selecione um fornecedor</option>

            <?php           
              $queryConsulta = "SELECT * FROM fornecedor ORDER BY razaoNomeEmpresarial ASC";
              $exeQuery = mysqli_query($conexao, $queryConsulta);

              while ($resultado = mysqli_fetch_array($exeQuery)) {

                $idFornecedor = $resultado['idFornecedor'];
                $nomeFantasia = $resultado['nomeFantasia'];  
  
                if ($nomeFantasia == $fornecedor)
                {
                  echo "<option selected>$nomeFantasia</option>";
                }
                else
                {
                  echo "<option>$nomeFantasia</option>";
                }
              }
            ?>

          </select>
        </div>

        <div class="mb-3">
          <label for="quantidade" class="form-label">Quantidade</label>
          <input
            type="text"
            class="form-control"
            id="quantidade"
            name="quantidadeData"
            placeholder="Quantidade"
            autocomplete="off"
            required
            value="<?=$quantidade?>"/>
        </div>

        <div class="mb-5">
          <label for="valorVenda" class="form-label">Valor de Venda</label>
          <div class="input-group">
            <span class="input-group-text">R$</span>
            <input 
              type="text" 
              class="form-control" 
              id="valorVenda" 
              name="valorVendaData" 
              placeholder="0" 
              autocomplete="off" 
              required 
              value="<?=$valorVenda?>"/>
          </div>
        </div>      

        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
          <button
            class="btn btn-secondary me-auto"
            type="reset">
            Limpar formulario
          </button>

          <button
            class="btn btn-secondary"
            style="width: 120px"
            type="button"
            id="buttons"
            onclick="carregar('pages/produtos/produtos.php')">
            Voltar
          </button>

          <button
            class="btn btn-primary"
            style="width: 120px"
            type="submit"
            id="buttons">
            Salvar
          </button>
        </div>
        
      </form>
    </div>

    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/index.js"></script>
  </body>
</html>