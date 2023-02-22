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


            <!-- Button Start -->
			<div class="container-fluid pt-4 px-4">
                
                        <div class="bg-secondary rounded h-4 p-4">
            <div class="col-sm-12 ">
                        <div class="col-sm-12">
                        <div class="bg-secondary rounded h-50 p-4">
                            <h6 class="mb-4">Formulario Animais</h6>
							</div>
							</div>
                            <div class="container">
                                <div class="row">
                                <div class="col-sm-12">
                              <form method="post" id="frmContato">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label for="text" >ID contato</label>
                                         <input type="number" class="form-control" name="txtID" id="txtID">
                                    </div>
                                    <div class="col-sm-3 ">
                               <button class="btn btn-light mt-4" id="btoPesquisar" > Pesquisar</button>
		                    	</div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-2">
                                    <label for="txtDataCadastro">Data Contato</label>
                                    <input type="date" class="form-control" name="txtData" id="txtData">
                                </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                         <label for="text" >Nome</label> 
                                          <input type="text" class="form-control" name="txtNome" id="txtNome">
                                    </div>
                                       <div class="row">
                                        <div class="col-sm-2">
                                        <label for="text">Email</label> 
                                         <input type="text" class="form-control" name="txtEmail" id="txtEmail">
                                       </div>
                                       <div class="col-sm-2">
                                           <label for="text">Telefone</label>
                                             <input type="text" class="form-control" name="txtTelefone" id="txtTelefone">
                                       </div>
                                      
                                        <div class="col-sm-2">
                                              <label for="text">Status</label>
                                               <input type="text" class="form-control" name="txtStatus" id="txtStatus">
                                        </div>
                                       </div>
                                      
								
								<div class="row">
										<div class="col-sm-12">
										<label for="txtObs" class="form-label">Observação</label><br>
										<textarea name="txtObs" id="txtObs" cols="30" rows="5" class="form-control"></textarea>
										</div>
										</div>
								
                                </div>
                                </div>
                                <div class="btn btn-primary-col-sm-10">
                                <div class=" mt-4">
    <button class="btn btn-light " name="btoExcluir" id="btoExcluir"  >Excluir</button>
     <button class="btn btn-light" name="btoLimpar" id="btoLimpar" >Limpar</button>
   </div>
   <div id="resposta"></div>

                            </form>
                            </div>
                                </div>
                            </div>
         
                        </div>
                    </div>
                    
                    <script src="js/jquery-3.6.0.js"></script>
            <script src="contato_script.js"></script>






            <!-- Footer Start -->
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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