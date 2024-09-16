<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>

    <link rel="stylesheet" href="../../../assets/dist/css/bootstrap.min.css">

    <link href="../../../assets/dist/icons/index.html">
</head>
<body>
    <div class="container mt-5">

      <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-1 fw-bold">Categoria</h2>
        <button 
          type="button" 
          class="btn-close" 
          aria-label="Close"
          onclick="carregar('pages/produtos/produtos.php')">
        </button>
      </div>
      
      <hr />

      <div class="my-4">
          <button type="button" class="btn btn-primary me-3" onclick="carregar('pages/produtos/categoria/cadastrarCategoria.html')">Nova categoria</button>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>

          <?php
            include '../../../database/conexao.php';
              
            $querySelect = "SELECT * FROM `categoria`";
            $dataList = mysqli_query($conexao, $querySelect);
            if (mysqli_num_rows($dataList) > 0)
            {
              foreach($dataList as $data) {               
          ?>
          <tr>
            <td><?=$data['idCategoria']?></td>
            <td><?=$data['nomeCategoria']?></td>
            <td>
              <button type="button" class="btn btn-outline-warning btn-sm">
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
                echo '<h5>Nenhum categoria encontrado....</h5>';
              } 
          ?>
          
        </tbody>
      </table>

    </div>

    <script src="../../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/index.js"></script>
</body>
</html>