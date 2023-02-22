

    <div class="container">
        <div class="row">  
            <?php
            include_once("conexao.php");

            try
            {
                $sql = $conn->query("select * from funcionario");

                foreach($sql as $dados)
                {
                    echo '<div class="col-sm-4 dados">';
                        echo "<pre>";
                            print_r($dados);
                        echo "</pre>";
                        echo '<img src="imagem/'.$dados['id_funcionario']."/".$dados['img_funcionario'].'">';
                    echo "</div>";
                }

            }
            catch(PDOException $b)
            {
                echo $b->getMessage();
            }    
            ?>
            <a href="frm_funcionario.php" class="btn btn-dark">voltar</a>
        </div>
    
    </div>
    
</body>
</html>