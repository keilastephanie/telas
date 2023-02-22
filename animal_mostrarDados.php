<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="estilo.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">  
            <?php
            include_once("conexao.php");

            try
            {
                $sql = $conn->query("select * from animal");

                foreach($sql as $dados)
                {
                    echo '<div class="col-sm-4 dados">';
                        echo "<pre>";
                            print_r($dados);
                        echo "</pre>";
                        echo '<img src="imagem/'.$dados['id_animal']."/".$dados['imagem_animal'].'">';
                    echo "</div>";
                }

            }
            catch(PDOException $b)
            {
                echo $b->getMessage();
            }    
            ?>
            <a href="frm_animal.php" class="btn btn-dark">voltar</a>
        </div>
    
    </div>
    
</body>
</html>