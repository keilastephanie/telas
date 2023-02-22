$(function(){
    console.log("Entrou na pag.js bla");

    debuga = $("#resposta");
    enviar = $("#frmCategoria");
    action = '';

    enviar.submit(function(){
        return false;
    })
    function carregando(datas){
        debuga.empty().html('Carregando...');

    };
    function sucesso(datas){
        debuga.empty().html(datas);
        $("categoria").val($("IDGerado").text());

    };

    function sucessoPesquisa(datas){
        debuga.empty().html(datas);
        $("categoria").val($("idCategoria").text());

        $("#Nome").val($("#nomeCategoria").text());
        $("#LocalArmazenagem").val($("#localarmazenagemCategoria").text());
        $("#txtDescricao").val($("#descricaoCategoria").text());
        $("#txtObs").val($("#obsCategoria").text());
        $("#txtStatus").val($("#statusCategoria").text());

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
                    Nome: $("#Nome").val(),
                    LocalArmazenagem: $("#LocalArmazenagem").val(),
                    txtDescricao: $("#txtDescricao").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val()
                }
            })
        });
        $("#btoPesquisar").click(function(){
            console.log("Botão btoPesquisar acionado");

            //action = 'teste.php';
            action = 'categoria_pesquisar.php';

            $.ajax({
                url: action,
                data:{
                    categoria: $("#categoria").val()
                },
                success:sucessoPesquisa
            });
        });

        $("#btoLimpar").click(function(){
            console.log("Botão btoLimpar acionado");
            $("#categoria").val("");
            $("#Nome").val("");
            $("#LocalArmazenagem").val("");
            $("#txtDescricao").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");
        });
            $("#btoAlterar").click(function(){
            console.log("Botão btoAlterar acionado");

            //action = 'teste.php';
            action = 'categoria_alterar.php';

            $.ajax({
                url: action,
                data:{
                   categoria: $("#categoria").val(),
                    Nome: $("#Nome").val(),
                    LocalArmazenagem: $("#LocalArmazenagem").val(),
                    txtDescricao: $("#txtDescricao").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val(),
                }
            })
        });
        $("#btoExcluir").click(function(){
            console.log("btoExcluir foi acionado");

            //action = 'teste.php';
            action = 'categoria_excluir.php';

            $.ajax({
                url: action,
                data:{
                    categoria: $("#categoria").val()
                }
            })
            $("#categoria").val("");
            $("#Nome").val("");
            $("#LocalArmazenagem").val("");
            $("#txtDescricao").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");



        });
})