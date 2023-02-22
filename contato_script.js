$(function(){
    console.log("Entrou na pag.js bla");

    debuga = $("#resposta");
    enviar = $("#frmContato");
    action = '';

    enviar.submit(function(){
        return false;
    })
    function carregando(datas){
        debuga.empty().html('Carregando...');

    };
    function sucesso(datas){
        debuga.empty().html(datas);
        $("contato").val($("IDGerado").text());

    };

    function sucessoPesquisa(datas){
        debuga.empty().html(datas);
        $("contato").val($("idContato").text());

        $("#txtNome").val($("#nomeContato").text());
        $("#txtData").val($("#dataContato").text());
        $("#txtEmail").val($("#emailContato").text());
        $("#txtTelefone").val($("#telefoneContato").text());
        $("#txtObs").val($("#obsContato").text());
        $("#txtStatus").val($("#statusContato").text());


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
            action = 'categoria_cadastrar.php';

            $.ajax({
                url: action,
                data:{
                    txtNome: $("#txtNome").val(),
                    txtData: $("#txtData").val(),
                    txtEmail: $("#txtEmail").val(),
                    txtTelefone: $("#txtObs").val(),
                    txtobs:$("txtObs").val(),
                    txtStatus: $("#txtStatus").val()
                }
            })
        });
        $("#btoPesquisar").click(function(){
            console.log("Botão btoPesquisar acionado");

            //action = 'teste.php';
            action = 'pesquisar_contato.php';

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
            $("#txtEmail").val("");
            $("#txtTelefone").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");
        });
            $("#btoAlterar").click(function(){
            console.log("Botão btoAlterar acionado");

            //action = 'teste.php';
            action = 'contato_alterar.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val(),
                    txtNome: $("#txtNome").val(),
                    txtEmail: $("#txtEmail").val(),
                    txtTelefone: $("#txtTelefone").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val(),
                }
            })
        });
        $("#btoExcluir").click(function(){
            console.log("btoExcluir foi acionado");

            //action = 'teste.php';
            action = 'excluir_contato.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val()
                }
            })
            $("#txtID").val("");
            $("#txtNome").val("");
            $("#txtEmail").val("");
            $("#txtTelefone").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");



        });
})