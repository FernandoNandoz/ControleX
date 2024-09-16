<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>

    <link rel="stylesheet" href="../../assets/dist/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">

        <h2 class="fw-bold mt-5">Estoque</h2>

        <hr />

        <h5 class="mb-2">Resumo</h5>

        <div class="d-flex gap-3">
              
          <div class="flex-fill card mb-3" style="width: 18rem; height: 7rem;">
            <div class="card-header text-center text-bg-secondary">Saldo anterior</div>
            <span class="text-center m-auto">
              R$ 0,00
            </span>
          </div>

          <div class="flex-fill card mb-3" style="width: 18rem; height: 7rem;">
            <div class="card-header text-center text-bg-success">Entradas</div>
            <span class="text-center m-auto">
              R$ 0,00
            </span>
          </div>

          <div class="flex-fill card mb-3" style="width: 18rem; height: 7rem;">
            <div class="card-header text-center text-bg-danger">Saídas</div>
            <span class="text-center m-auto">
              R$ 0,00
            </span>
          </div>

          <div class="flex-fill card mb-3" style="width: 18rem; height: 7rem;">
            <div class="card-header text-center text-bg-primary">Saldo</div>
            <span class="text-center m-auto">
              R$ 0,00
            </span>
         </div>
        </div>

        <div class="d-flex justify-content-between align-items-center my-3">

            <button 
              type="button" 
              class="btn btn-secondary btn-sm" 
              data-bs-toggle="modal" 
              data-bs-target="#movimentarEstoque"
              >
              Movimentar
            </button>

            <div class="d-flex gap-2 justify-content-between align-content-center">
                <div>
                    <select class="form-select form-select-sm" id="selectCategoria" name="categoriaData">
                      <option selected>Selecione o periodo</option>
                      <option>Janeiro</option>
                      <option>Fevereiro</option>
                      <option>Março</option>
                      <option>Abril</option>
                      <option>Maio</option>
                      <option>Junho</option>
                      <option>Julho</option>
                      <option>Agosto</option>
                      <option>Setembro</option>
                      <option>Outubro</option>
                      <option>Novembro</option>
                      <option>Dezembro</option>
                    </select>
                  </div>

                <button type="button" class="btn btn-primary btn-sm" style="width: 120px;">Pesquisar</button>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
              <tr class="text-center">
                <th scope="col" class="text-start">Data</th>
                <th scope="col">Entrada</th>
                <th scope="col">Saída</th>
                <th scope="col">Descrição</th>
                <th scope="col">Saldo Atual</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td class="text-start">07/08/2024</td>
                <td>10</td>
                <td>0</td>
                <td>Entrada via cadastro de produto</td>
                <td>10</td>
              </tr>
              <tr class="text-center">
                <td class="text-start">08/08/2024</td>
                <td>5</td>
                <td>0</td>
                <td>Entrada de outra filial</td>
                <td>15</td>
              </tr>
              <tr class="text-center">
                <td class="text-start" scope="row">07/08/2024</td>
                <td>0</td>
                <td>7</td>
                <td>Retirada para outra filial</td>
                <td>8</td>
              </tr>
            </tbody>
          </table>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="movimentarEstoque" data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title fs-5">Movimentar Estoque</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">

            <form class="mx-1" method="post" id="movimentarForm" action="" onsubmit="gravar(); return false;">
              
              <div class="mb-1">
                <label for="tipoMovimentacao" class="col-form-label">Tipo de movimentação</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Entrada</option>
                  <option>Saida</option>
                </select>
              </div>
              <div class="mb-1">
                <label for="quantidade" class="col-form-label">Quantidade</label>
                <input type="text" class="form-control" id="quantidade" placeholder="Quantidade" name="quantidadeData" autocomplete="off" required>
              </div>
              <div class="mb-4">
                <label for="descricao" class="col-form-label">Descricao</label>
                <input type="text" class="form-control" id="descricao" placeholder="Descrição" name="descricaoData" autocomplete="off" required>
              </div>
            </form>
    
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width: 100px;">Voltar</button>
            <button type="button" class="btn btn-primary" style="width: 100px;">Salvar</button>
          </div>

        </div>
      </div>
    </div>


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/index.js"></script>
</body>
</html>