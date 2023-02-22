<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="widget.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-dark mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-secondary border-0" type="search" placeholder="Procurar">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="tabela_contato.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Mensagem</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="tabela_contato.php" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0"></h6>
                                        <table id="tabela" class="table table- striped"style="width: 100%">

                                                                <thead>
                                                                    <tr>
                                                                        <th>Nome</th>
                                                                    
                                                                    </tr>
                                                                    </thead>
                                                                    <?php
                                                                    include("conexao.php");
                                                                    try
                                                                    {
                                                                        $sql=$conn->query("select * from contato");
                                                                        
                                                                        foreach($sql as $linha)
                                                                        {
                                                                            
                                                                        
                                                                            echo "<tr>";
                                                                            echo"<th>".$linha['nome_contato']."</th>";
                                                                            
                                                                           
                                                                            echo"</th>";
                                                                        

                                                                        }

                                                                    }
                                                                    catch(PDOException $ex)
                                                                    {
                                                                        echo"ERRO:".$ex->getMessage();
                                                                    }
                                                                    ?>
                                                                    </table>
                                                                
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="tabela_contato.php" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                   
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0"></h6>
                                        <small></small>
                                    </div>
                                </div>
                            </a>
                            
                            </a>
                            <hr class="dropdown-divider">
                            <a href="tabela_contato.php" class="dropdown-item text-center">Ver todas as mensagens</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="tabela_contato.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificação</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">perfil</h6>
                                <small></small>
                            </a>
                            
                            <hr class="dropdown-divider">
                            <a href="tabela_contato.php" class="dropdown-item text-center">Ver todas as notificações</a>
                        </div>
                    </div>
           
                        
              
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            
                            <a href="login.php" class="dropdown-item">Sair</a>
                        </div>
                    
                </div>
            </nav>