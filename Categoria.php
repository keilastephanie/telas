<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sistema</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <?php include_once("navbar-loading.php")?>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include_once("navbar-lateral.php")?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include_once("navbar-topo.php")?>	
            <!-- Navbar End -->
         <!-- começo do formulário de categoria -->

         <div class="container-flui">
         <div class="bg-secondary ">
            <div class="row">
            <div class="bg-secondary ">
                <div class="col-sm-12 p-4">
                     <h1>Formulário de categoria</h1>
                     <form action="" class="secondary" method="post" id="frmCategoria">
                    <div class="row">
                     
                        <div class="col-sm-3">
                          <label for="">ID Categoria</label>
                          <input type="text" class="form-control" name="categoria" id="categoria">
                          </div>
                          <div class="col-sm-4">
                            <button class="btn btn-light mt-4" id="btoPesquisar"> Pesquisar</button>
                                </div>
                            <div class="col-sm-5"></div>
                          <div class="col-sm-8">
                          <label for="" >Nome</label>
                          <input type="text" class="form-control"  name="Nome" id="Nome">
                          </div>
                          <div class="row"> 
                            <div class="col-sm-4">
                          <label for="" >Amarzenagem</label>
                          <input type="text" class="form-control" name="LocalArmazenagem" id="LocalArmazenagem">
                          </div>
                          <div class="col-sm-4">
                          <label for="">Descrição</label>
                          <input type="text" class="form-control" name="txtDescricao" id="txtDescricao">
                          </div>
                          <div class="col-sm-2">
                          <label for="" >Status</label>
                          <input type="text" class="form-control" name="txtStatus" id="txtStatus">
                          </div>
                   
                        <div class="col-sm-10">
                        <label for="">Observação</label>
                        <textarea name="txtObs" name="txtObs" id="txtObs" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class=" mt-4">
                                            <button class="btn btn-light" name="btoCadastrar" id="btoCadastrar"> Cadastrar</button>
                                            <button class="btn btn-light" name="btoAlterar" id="btoAlterar">Alterar</button>
                                            <button class="btn btn-light " name="btoExcluir" id="btoExcluir" >Excluir</button>
                                            <button class="btn btn-light" name="btoLimpar" id="btoLimpar" >Limpar</button>
                        </div>
                         <div id="resposta" ></div>
                        </form>
      
                    </div> 
                </div>
            </div>
</div>
         </div>
         
</div>


<script src="js/jquery-3.6.0.js"></script>
<script src="categoria_script.js"></script>
<script>   
    function carregarImg(imagem)
    {
        var preview = document.getElementById("preImg");
        var file = document.getElementById("txtImg").files[0];

        var reader = new FileReader();

        reader.onloadend = function(){
            var caminho = reader.result;
            preview.src = caminho;

            $("#base64Code").val(caminho);
        }

        if(file)
        {
            reader.readAsDataURL(file);
        }
        else
        {
            preview.src="";
        }
    }

</script>





           
			
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>