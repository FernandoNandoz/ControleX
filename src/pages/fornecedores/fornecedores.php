<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fornecedores</title>

    <link rel="stylesheet" href="../../assets/dist/css/bootstrap.min.css" />

    <link href="../../assets/dist/icons/index.html" />
  </head>
  <body>
    <div class="container mt-5">

      <h2 class="mb-1 fw-bold">Fornecedores</h2>

      <hr />

      <div class="my-4">
        <button
          type="button"
          class="btn btn-primary"
          onclick="carregar('pages/fornecedores/cadastrarFornecedor.html')"
        >
          Novo cadastro
        </button>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nome Fantasia</th>
            <th scope="col">Tipo</th>
            <th scope="col">Marca</th>
            <th scope="col">Representante</th>
            <th scope="col">Contato</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include '../../database/conexao.php';
              
            $querySelect = "SELECT * FROM `fornecedor`";
            $dataList = mysqli_query($conexao, $querySelect);
            if (mysqli_num_rows($dataList) > 0)
            {
              foreach($dataList as $data) {               
          ?>
          <tr>
            <td><?=$data['idFornecedor']?></td>
            <td><?=$data['nomeFantasia']?></td>
            <td><?=$data['tipoFornecedor']?></td>
            <td><?=$data['marca']?></td>
            <td><?=$data['representante']?></td>
            <td><?=$data['contato']?></td>
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
                echo '<h5>Nenhum fornecedor encontrado.</h5>';
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
