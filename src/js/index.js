function carregar(pagina){
    $("#contentBody").load(pagina);
}

function editar(pagina){
    //alert(pagina);
    $("#contentBody").load(pagina);
}

function gravar(operacao){
           
    if (operacao == "produto") {
        $.ajax({
            method: "post",
            url: "php/produtos/inserirProduto.php",
            data: $("#cadastrarProduto").serialize(),
            success: function(data){
                alert(data);
            }   
        });
    };

    if (operacao == "categoria") {
        $.ajax({
            method: "post",
            url: "php/produtos/inserirCategoria.php",
            data: $("#cadastrarCategoria").serialize(),
            success: function(data){
                alert(data);
            }   
        });
    };

    if (operacao == "fornecedor") {
        $.ajax({
            method: "post",
            url: "php/fornecedores/inserirFornecedor.php",
            data: $("#cadastrarFornecedor").serialize(),
            success: function(data){
                alert(data);
            }   
        });
    }   
}

// Funções para alterar produto
function update(operacao){

    if (operacao == "produto") {
        $.ajax({
            method: "post",
            url: "php/produtos/updateProduto.php",
            data: $("#editarProduto").serialize(),
            success: function(data){
                alert(data);
            }   
        });
    };

    if (operacao == "categoria") {
        $.ajax({
            method: "post",
            url: "php/produtos/updateCategoria.php",
            data: $("#updateCategoria").serialize(),
            success: function(data){
                alert(data);
            }   
        });
    };

    if (operacao == "fornecedor") {
        $.ajax({
            method: "post",
            url: "php/fornecedores/updateFornecedor.php",
            data: $("#updateFornecedor").serialize(),
            success: function(data){
                alert(data);
            }   
        });
    }   
}