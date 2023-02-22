$(function(){
    console.log("Entrou na pag.js bla");

    debuga = $("#resposta");
    enviar = $("#frmProduto");
    action = '';

    enviar.submit(function(){
        return false;
    })
    function carregando(datas){
        debuga.empty().html('Carregando...');

    };
    function sucesso(datas){
        debuga.empty().html(datas);
        $("joaquim").val($("IDGerado").text());

    };

    function sucessoPesquisa(datas){
        debuga.empty().html(datas);
        $("#joaquim").val($("#idProduto").text());

        $("#txtNome").val($("#nomeProduto").text());
        $("#txtDescricao").val($("#descricaoProduto").text());
        $("#txtQtde").val($("#qtdeProduto").text());
        $("#txtIdCategoria").val($("#idCategoria").text());
        $("#txtValor").val($("#valorProduto").text());
        $("#base64Code").val($("#imgProduto").text());
        $("#txtObs").val($("#obsProduto").text());
        $("#txtStatus").val($("#statusProduto").text());

    }
    function errosend(datas){
        debuga.empty().html('Erro ao Enviar os dados');
    };
    enviar.submit(function(){
        return false;
    });
        $.ajaxSetup({
            type: 'POST',
            beforeSend: carregando,
            error: errosend,
            success: sucesso
        });
        $("#btoCadastrar").click(function(){
            console.log("Botão btoCadastrar acionado");

            //action = 'teste.php';
            action = 'produto_cadastrar.php';

            $.ajax({
                url: action,
                data:{
                    txtNome: $("#txtNome").val(),
                    txtDescricao: $("#txtDescricao").val(),
                    txtQtde: $("#txtQtde").val(),
                    txtIdCategoria: $("#txtIdCategoria").val(),
                    txtValor: $("#txtValor").val(),
                    txtData: $("#txtData").val(),
                    txtImg: $("#base64Code").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val()
                }
           
            })
        });
        $("#btoPesquisar").click(function(){
            console.log("Botão btoPesquisar acionado");
            //console.log($("#txtID").val());
            //alert($("#txtID").val());
            //alert(window.getElementById("txtID"));

            //action = 'teste.php';
            action = 'produto_pesquisar.php';

            $.ajax({
                url: action,
                data:{
                    joaquim: $("#joaquim").val()
                },
                success:sucessoPesquisa
            });
        });

        $("#btoLimpar").click(function(){
            console.log("Botão btoLimpar acionado");
            $("#joaquim").val("");
            $("#txtNome").val("");
            $("#txtDescricao").val("");
            $("#txtQtde").val("");
            $("#txtIdCategoria").val("");
            $("#txtValor").val("");
            $("#txtData").val("");
            $("#txtImg").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");
            document.getElementById("preImg").src = "";
        });
            $("#btoAlterar").click(function(){
            console.log("Botão btoAlterar acionado");

            //action = 'teste.php';
            action = 'produto_alterar.php';

            $.ajax({
                url: action,
                data:{
                    joaquim: $("#joaquim").val(),
                    txtNome: $("#txtNome").val(),
                    txtDescricao: $("#txtDescricao").val(),
                    txtQtde: $("#txtQtde").val(),
                    txtIdCategoria: $("#txtIdCategoria").val(),
                    txtValor: $("#txtValor").val(),
                    txtData: $("#txtData").val(),
                    txtImg: $("#base64Code").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val(),
                }
            })
        });
        $("#btoExcluir").click(function(){
            console.log("btoExcluir foi acionado");

            //action = 'teste.php';
            action = 'produto_excluir.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#joaquim").val()
                }
            })
            $("#joaquim").val("");
            $("#txtNome").val("");
            $("#txtDescricao").val("");
            $("#txtQtde").val("");
            $("#txtIdCategoria").val("");
            $("#txtValor").val("");
            $("#txtData").val("");
            $("#base64Code").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");
            document.getElementById("preImg").src = "";



        });
})