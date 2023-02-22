$(function(){
    console.log("Entrou na pag.js bla");

    debuga = $("#resposta");
    enviar = $("#frmAdocao");
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
        $("txtID").val($("idAdocao").text());

        $("#txtNomeAdocao").val($("#nomeAdocao").text());
        $("#txtNomeAnimal").val($("#nomeanimalAdocao").text());
        $("#txtRacaAnimal").val($("#racaanimalAdocao").text());
        $("#txtSexoAnimal").val($("#sexoanimalAdocao").text());
        $("#txtPorteAnimal").val($("#porteanimalAdocao").text());
        $("#txtEndereco").val($("#enderecoAdocao").text());
        $("#txtNumero").val($("#numeroAdocao").text());
        $("#txtBairro").val($("#bairroAdocao").text());
        $("#txtTelefone").val($("#telefoneAdocao").text());
        $("#txtEmail").val($("#emailAdocao").text());
        $("#txtObs").val($("#obsAdocao").text());
        $("#txtStatus").val($("#statusAdocao").text());

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
            action = 'adocao_cadastrar.php';

            $.ajax({
                url: action,
                data:{
                    txtNomeAdocao: $("#txtNomeAdocao").val(),
                    txtNomeAnimal: $("#txtNomeAnimal").val(),
                    txtRacaAnimal: $("#txtRacaAnimal").val(),
                    txtSexoAnimal: $("#txtSexoAnimal").val(),
                    txtPorteAnimal: $("#txtPorteAnimal").val(),
                    txtEndereco: $("#txtEndereco").val(),
                    txtNumero: $("#txtNumero").val(),
                    txtBairro: $("#txtBairro").val(),
                    txtTelefone: $("#txtTelefone").val(),
                    txtEmail: $("#txtEmail").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val()
                }
            })
        });
        $("#btoPesquisar").click(function(){
            console.log("Botão btoPesquisar acionado");

            //action = 'teste.php';
            action = 'adocao_pesquisar.php';

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
            $("#txtNomeAdocao").val("");
            $("#txtNomeAnimal").val("");
            $("#txtRacaAnimal").val("");
            $("#txtSexoAnimal").val("");
            $("#txtPorteAnimal").val("");
            $("#txtEndereco").val("");
            $("#txtNumero").val("");
            $("#txtBairro").val("");
            $("#txtTelefone").val("");
            $("#txtEmail").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");
        });
            $("#btoAlterar").click(function(){
            console.log("Botão btoAlterar acionado");

            //action = 'teste.php';
            action = 'adocao_alterar.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val(),
                    txtNomeAdocao: $("#txtNomeAdocao").val(),
                    txtNomeAnimal: $("#txtNomeAnimal").val(),
                    txtRacaAnimal: $("#txtRacaAnimal").val(),
                    txtSexoAnimal: $("#txtSexoAnimal").val(),
                    txtPorteAnimal: $("#txtPorteAnimal").val(),
                    txtEndereco: $("#txtEndereco").val(),
                    txtNumero: $("#txtNumero").val(),
                    txtBairro: $("#txtBairro").val(),
                    txtTelefone: $("#txtTelefone").val(),
                    txtEmail: $("#txtEmail").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val(),
                }
            })
        });
        $("#btoExcluir").click(function(){
            console.log("btoExcluir foi acionado");

            //action = 'teste.php';
            action = 'adocao_excluir.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val()
                }
            })
            $("#txtID").val("");
            $("#txtNomeAdocao").val("");
            $("#txtNomeAnimal").val("");
            $("#txtRacaAnimal").val("");
            $("#txtSexoAnimal").val("");
            $("#txtPorteAnimal").val("");
            $("#txtEndereco").val("");
            $("#txtNumero").val("");
            $("#txtBairro").val("");
            $("#txtTelefone").val("");
            $("#txtEmail").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");



        });
})