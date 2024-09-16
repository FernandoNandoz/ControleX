<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Produto</title>

    <link rel="stylesheet" href="../../assets/dist/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container my-5" style="width: 700px">

      <h3 class="mb-2 fw-bold">Cadastrar Produto</h3>

      <hr class="mb-4" />

      <form method="post" id="cadastrarProduto" action="" onsubmit="gravar('produto'); return false;">
        <div class="mb-3">
          <label for="codigoProduto" class="form-label">Codigo do Produto</label>
          <input
            type="number"
            class="form-control"
            id="codigoProduto"
            name="codigoProdutoData"
            placeholder="Codigo do Produto"
            autocomplete="off"
            required/>
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
            required/>
        </div>

        <div class="mb-3">
          <label for="selectCategoria" class="form-label">Categoria</label>
          <select class="form-select" id="selectCategoria" name="categoriaData">
            
            <option selected>Selecione uma categoria</option>

            <?php           
              include '../../database/conexao.php';

              $queryConsulta = "SELECT * FROM categoria ORDER BY nomeCategoria ASC";
              $exeQuery = mysqli_query($conexao, $queryConsulta);

              while ($resultado = mysqli_fetch_array($exeQuery)) {

                $idCategoria = $resultado['idCategoria'];
                $nomeCategoria = $resultado['nomeCategoria'];  
                
                echo "<option>$nomeCategoria</option>";
              }
            ?>

          </select>
        </div>

        <div class="mb-3">
          <label for="selectFornecedor" class="form-label">Fornecedor</label>
          <select class="form-select" id="selectFornecedor" name="fornecedorData">
            
            <option selected>Selecione um fornecedor</option>

            <?php   
              include '../../database/conexao.php';

              $queryConsulta = "SELECT * FROM fornecedor ORDER BY razaoNomeEmpresarial ASC";
              $exeQuery = mysqli_query($conexao, $queryConsulta);

              while ($resultado = mysqli_fetch_array($exeQuery)) {

                $idFornecedor = $resultado['idFornecedor'];
                $nomeFantasia = $resultado['nomeFantasia'];  

                echo "<option>$nomeFantasia</option>";
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
            required/>
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
              required />
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
            Cadatrar
          </button>
        </div>
        
      </form>
    </div>

    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/index.js"></script>
  </body>
</html>
