$(function(){
    console.log("Entrou na pag.js bla");

    debuga = $("#resposta");
    enviar = $("#frmFuncionario");
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
        $("txtID").val($("idFuncionario").text());

        $("#txtNome").val($("#nomeFuncionario").text());
        $("#txtLogin").val($("#loginFuncionario").text());
        $("#txtSenha").val($("#senhaFuncionario").text());
        $("#txtGenero").val($("#generoFuncionario").text());
        $("#txtCadastro").val($("#dataFuncionario").text());
        $("#txtCPF").val($("#cpfFuncionario").text());
        $("#txtNascimento").val($("#nascimentoFuncionario").text());
        $("#txtEnde").val($("#enderecoFuncionario").text());
        $("#txtCEP").val($("#cepFuncionario").text());
        $("#txtNumero").val($("#numeroFuncionario").text());
        $("#txtComplemento").val($("#complementoFuncionario").text());
        $("#txtBairro").val($("#bairroFuncionario").text());
        $("#txtCidade").val($("#cidadeFuncionario").text());
        $("#txtTelefone").val($("#telefoneFuncionario").text());
        $("#txtCelular").val($("#celularFuncionario").text());
        $("#txtEmail").val($("#emailFuncionario").text());
        $("#txtObs").val($("#obsFuncionario").text());
        $("#txtStatus").val($("#statusFuncionario").text());

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
            action = 'funcionario_cadastrar.php';

            $.ajax({
                url: action,
                data:{
                    txtNome: $("#txtNome").val(),
                    txtLogin: $("#txtLogin").val(),
                    txtSenha: $("#txtSenha").val(),
                    txtGenero: $("#txtGenero").val(),
                    txtCadastro: $("#txtCadastro").val(),
                    txtCPF: $("#txtCPF").val(),
                    txtNascimento: $("#txtNascimento").val(),
                    txtEnde: $("#txtEnde").val(),
                    txtCEP: $("#txtCEP").val(),
                    txtNumero: $("#txtNumero").val(),
                    txtComplemento: $("#txtComplemento").val(),
                    txtBairro: $("#txtBairro").val(),
                    txtCidade: $("#txtCidade").val(),
                    txtTelefone: $("#txtTelefone").val(),
                    txtCelular: $("#txtCelular").val(),
                    txtEmail: $("#txtEmail").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val()
                }
            })
        });
        $("#btoPesquisar").click(function(){
            console.log("Botão btoPesquisar acionado");

            //action = 'teste.php';
            action = 'funcionario_pesquisar.php';

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
            $("#txtGenero").val("");
            $("#txtCadastro").val("");
            $("#txtCPF").val("");
            $("#txtNascimento").val("");
            $("#txtEnde").val("");
            $("#txtCEP").val("");
            $("#txtNumero").val("");
            $("#txtComplemento").val("");
            $("#txtBairro").val("");
            $("#txtCidade").val("");
            $("#txtTelefone").val("");
            $("#txtCelular").val("");
            $("#txtEmail").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");
        });
            $("#btoAlterar").click(function(){
            console.log("Botão btoAlterar acionado");

            //action = 'teste.php';
            action = 'funcionario_alterar.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val(),
                    txtNome: $("#txtNome").val(),
                    txtLogin: $("#txtLogin").val(),
                    txtSenha: $("#txtSenha").val(),
                    txtGenero: $("#txtGenero").val(),
                    txtCadastro: $("#txtCadastro").val(),
                    txtCPF: $("#txtCPF").val(),
                    txtNascimento: $("#txtNascimento").val(),
                    txtEnde: $("#txtEnde").val(),
                    txtCEP: $("#txtCEP").val(),
                    txtNumero: $("#txtNumero").val(),
                    txtComplemento: $("#txtComplemento").val(),
                    txtBairro: $("#txtBairro").val(),
                    txtCidade: $("#txtCidade").val(),
                    txtTelefone: $("#txtTelefone").val(),
                    txtCelular: $("#txtCelular").val(),
                    txtEmail: $("#txtEmail").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val(),
                }
            })
        });
        $("#btoExcluir").click(function(){
            console.log("btoExcluir foi acionado");

            //action = 'teste.php';
            action = 'funcionario_excluir.php';

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
            $("#txtGenero").val("");
            $("#txtcadastro").val("");
            $("#txtCPF").val("");
            $("#txtNascimento").val("");
            $("#txtEnde").val("");
            $("#txtCEP").val("");
            $("#txtNumero").val("");
            $("#txtComplemento").val("");
            $("#txtBairro").val("");
            $("#txtCidade").val("");
            $("#txtTelefone").val("");
            $("#txtCelular").val("");
            $("#txtEmail").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");



        });
})