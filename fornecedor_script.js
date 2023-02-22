$(function(){
    console.log("Entrou na pag.js testando");

    debuga = $("#resposta");
    enviar = $("#frmFornecedor");
    action = '';

    enviar.submit(function(){
        return false;
    })
    function carregando(datas){
        debuga.empty().html('Carregando...');

    };
    function sucesso(datas){
        debuga.empty().html(datas);
        $("txtID").val($("IDGerado").text());

    };

    function sucessoPesquisa(datas){
        debuga.empty().html(datas);
        $("txtID").val($("idFornecedor").text());

        $("#txtNome").val($("#nomeFornecedor").text());
        $("#txtLogin").val($("#loginFornecedor").text());
        $("#txtSenha").val($("#senhaFornecedor").text());
        $("#txtCPF").val($("#cpfFornecedor").text());
        $("#txtNascimento").val($("#nascimentoFornecedor").text());
        $("#txtGenero").val($("#generoFornecedor").text());
        $("#txtData").val($("#dataFornecedor").text());
        $("#txtCelular").val($("#celularFornecedor").text());
        $("#txtTelefone").val($("#telefoneFornecedor").text());
        $("#txtEmail").val($("#emailFornecedor").text());
        $("#txtEnde").val($("#enderecoFornecedor").text());
        $("#txtCEP").val($("#cepFornecedor").text());
        $("#txtBairro").val($("#bairroFornecedor").text());
        $("#txtCidade").val($("#cidadeFornecedor").text());
        $("#txtObs").val($("#obsFornecedor").text());
        $("#txtStatus").val($("#statusFornecedor").text());

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
            action = 'fornecedor_cadastrar.php';

            $.ajax({
                url: action,
                data:{
                    txtNome: $("#txtNome").val(),
                    txtLogin: $("#txtLogin").val(),
                    txtSenha: $("#txtSenha").val(),
                    txtCPF: $("#txtCPF").val(),
                    txtNascimento: $("#txtNascimento").val(),
                    txtGenero: $("#txtGenero").val(),
                    txtData: $("#txtData").val(),
                    txtCelular: $("#txtCelular").val(),
                    txtTelefone: $("#txtTelefone").val(),
                    txtEmail: $("#txtEmail").val(),
                    txtEnde: $("#txtEnde").val(),
                    txtCEP: $("#txtCEP").val(),
                    txtBairro: $("#txtBairro").val(),
                    txtCidade: $("#txtCidade").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val()
                }
            })
        });
        $("#btoPesquisar").click(function(){
            console.log("Botão btoPesquisar acionado");

            //action = 'teste.php';
            action = 'fornecedor_pesquisar.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val()
                },
                success:sucessoPesquisa
            });
        });

        $("#btoLimpar").click(function(){
            console.log("Botão btoLimpar acionado");
            $("#txtID").val("");
            $("#txtNome").val("");
            $("#txtLogin").val("");
            $("#txtSenha").val("");
            $("#txtCPF").val("");
            $("#txtNascimento").val("");
            $("#txtGenero").val("");
            $("#txtData").val("");
            $("#txtCelular").val("");
            $("#txtTelefone").val("");
            $("#txtEmail").val("");
            $("#txtEnde").val("");
            $("#txtCEP").val("");
            $("#txtBairro").val("");
            $("#txtCidade").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");
        });
        $("#btoAlterar").click(function(){
            console.log("Botão btoAlterar acionado");

            //action = 'teste.php';
            action = 'fornecedor_alterar.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val(),
                    txtNome: $("#txtNome").val(),
                    txtLogin: $("#txtLogin").val(),
                    txtSenha: $("#txtSenha").val(),
                    txtCPF: $("#txtCPF").val(),
                    txtNascimento: $("#txtNascimento").val(),
                    txtGenero: $("#txtGenero").val(),
                    txtData: $("#txtData").val(),
                    txtCelular: $("#txtCelular").val(),
                    txtTelefone: $("#txtTelefone").val(),
                    txtEmail: $("#txtEmail").val(),
                    txtEnde: $("#txtEnde").val(),
                    txtCEP: $("#txtCEP").val(),
                    txtBairro: $("#txtBairro").val(),
                    txtCidade: $("#txtCidade").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val(),
                }
            })
        });
        $("#btoExcluir").click(function(){
            console.log("btoExcluir foi acionado");

            //action = 'teste.php';
            action = 'fornecedor_excluir.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val()
                }
            })
            $("#txtID").val("");
            $("#txtNome").val("");
            $("#txtLogin").val("");
            $("#txtSenha").val("");
            $("#txtCPF").val("");
            $("#txtNascimento").val("");
            $("#txtGenero").val("");
            $("#txtData").val("");
            $("#txtCelular").val("");
            $("#txtTelefone").val("");
            $("#txtEmail").val("");
            $("#txtEnde").val("");
            $("#txtCEP").val("");
            $("#txtBairro").val("");
            $("#txtCidade").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");



        });
})