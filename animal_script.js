$(function(){
    console.log("Entrou na pag.js bla");

    debuga = $("#resposta");
    enviar = $("#frmAnimal");
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
        $("txtID").val($("idAnimal").text());

        $("#txtNome").val($("#nomeAnimal").text());
        $("#txtSexo").val($("#sexoAnimal").text());
        $("#txtPelagem").val($("#pelagemAnimal").text());
        $("#txtPorte").val($("#porteAnimal").text());
        $("#txtIdade").val($("#idadeAnimal").text());
        $("#txtSinais").val($("#sinaisAnimal").text());
        $("#txtChip").val($("#chipAnimal").text());
        $("#txtVacina").val($("#vacinaAnimal").text());
        $("#txtCastracao").val($("#castracaoAnimal").text());
        $("#txtColeira").val($("#coleiraidentificacaoAnimal").text());
        $("#base64Code").val($("#imgAnimal").text());
        $("#txtObs").val($("#obsAnimal").text());
        $("#txtStatus").val($("#statusAnimal").text());

        document.getElementById("preImg").value = "";
        var preview = document.getElementById("preImg");
        preview.src =  $("#base64Code").val();

    
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
            action = 'animal_cadastrar.php';

            $.ajax({
                url: action,
                data:{
                    txtNome: $("#txtNome").val(),
                    txtSexo: $("#txtSexo").val(),
                    txtPelagem: $("#txtPelagem").val(),
                    txtPorte: $("#txtPorte").val(),
                    txtData: $("#txtData").val(),
                    txtIdade: $("#txtIdade").val(),
                    txtSinais: $("#txtSinais").val(),
                    txtChip: $("#txtChip").val(),
                    txtVacina: $("#txtVacina").val(),
                    txtCastracao: $("#txtCastracao").val(),
                    txtColeira: $("#txtColeira").val(),
                    txtImg: $("#base64Code").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val()
                }
            })
        });
        $("#btoPesquisar").click(function(){
            console.log("Botão btoPesquisar acionado");

            //action = 'teste.php';
            action = 'animal_pesquisar.php';

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
            $("#txtSexo").val("");
            $("#txtPelagem").val("");
            $("#txtPorte").val("");
            $("#txtData").val("");
            $("#txtIdade").val("");
            $("#txtSinais").val("");
            $("#txtChip").val("");
            $("#txtVacina").val("");
            $("#txtCastracao").val("");
            $("#txtColeira").val("");
            $("#txtImg").val("");
            $("#base64Code").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");
            document.getElementById("preImg").src = "";
        });
        $("#btoAlterar").click(function(){
            console.log("Botão btoAlterar acionado");

            //action = 'teste.php';
            action = 'animal_alterar.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val(),
                    txtNome: $("#txtNome").val(),
                    txtSexo: $("#txtSexo").val(),
                    txtPelagem: $("#txtPelagem").val(),
                    txtPorte: $("#txtPorte").val(),
                    txtData: $("#txtData").val(),
                    txtIdade: $("#txtIdade").val(),
                    txtSinais: $("#txtSinais").val(),
                    txtChip: $("#txtChip").val(),
                    txtVacina: $("#txtVacina").val(),
                    txtCastracao: $("#txtCastracao").val(),
                    txtColeira: $("#txtColeira").val(),
                    txtImg: $("#base64Code").val(),
                    txtObs: $("#txtObs").val(),
                    txtStatus: $("#txtStatus").val(),
                }
            })
        });
        $("#btoExcluir").click(function(){
            console.log("btoExcluir foi acionado");

            //action = 'teste.php';
            action = 'animal_excluir.php';

            $.ajax({
                url: action,
                data:{
                    txtID: $("#txtID").val()
                }
            })
            $("#txtID").val("");
            $("#txtNome").val("");
            $("#txtSexo").val("");
            $("#txtPelagem").val("");
            $("#txtPorte").val("");
            $("#txtData").val("");
            $("#txtIdade").val("");
            $("#txtSinais").val("");
            $("#txtChip").val("");
            $("#txtVacina").val("");
            $("#txtCastracao").val("");
            $("#txtColeira").val("");
            $("#base64Code").val("");
            $("#txtObs").val("");
            $("#txtStatus").val("");
            document.getElementById("preImg").src = "";



        });
})