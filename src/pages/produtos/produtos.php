<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produtos</title>

    <link rel="stylesheet" href="../../assets/dist/css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container mt-5">
      
      <h2 class="mb-1 fw-bold">Produtos</h2>

      <hr />

      <div class="my-4">
        <button
          type="button"
          class="btn btn-primary me-3"
          onclick="carregar('pages/produtos/cadastrarProduto.php')"
        >
          Novo cadastro
        </button>
        <button
          type="button"
          class="btn btn-secondary"
          onclick="carregar('pages/produtos/categoria/categorias.php')"
        >
          Categorias
        </button>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nome do Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Fornecedor</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Valor de Venda (R$)</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
              include '../../database/conexao.php';
              
              $querySelect = "SELECT * FROM `produtos`";
              $dataList = mysqli_query($conexao, $querySelect);
              if (mysqli_num_rows($dataList) > 0)
              {
                foreach($dataList as $data) {               
            ?>
            <tr>
              <td><?=$data['codigoProduto']?></td>
              <td><?=$data['nomeProduto']?></td>
              <td><?=$data['categoria']?></td>
              <td><?=$data['fornecedor']?></td>
              <td><?=$data['quantidade']?></td>
              <td><?=$data['valorVenda']?></td>
              <td>
                <button 
                  type="button" 
                  class="btn btn-outline-warning btn-sm" 
                  onclick="editar('pages/produtos/editarProduto.php?id=' + <?=$data['idProduto']?>)" 
                >
                  Editar
                </button>
                <button type="button" class="btn btn-outline-danger btn-sm">
                  Deletar
                </button>
              </td>
            </tr>
            <?php 
                  } 
                } else {
                  echo '<h5>Nenhum produto encontrado....</h5>';
                } 
            ?>
        </tbody>
      </table>
    </div>

    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/index.js"></script>
  </body>
</html>
