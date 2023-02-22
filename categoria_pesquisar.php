
    <?php
    include_once("conexao.php");
    $id_categoria=$_POST['categoria'];
    
    try
    {
        $sql = $conn->query(
            "select * from categoria where id_categoria=".$id_categoria
        );
        
        //$sql->execute();
    
        if($sql->rowCount() == 1)
        {
            foreach($sql as $linha)
            {
                echo "<p style='display:none' id= 'idCategoria'>".$linha[0]."</p>";
                echo "<p style='display:none' id= 'nomeCategoria'>".$linha[1]."</p>";
				echo "<p style='display:none' id= 'localArmazenagemCategoria'>".$linha[2]."</p>";
				echo "<p style='display:none' id= 'descricaoCategoria'>".$linha[3]."</p>";
                echo "<p style='display:none' id= 'obsCategoria'>".$linha[4]."</p>";
                echo "<p style='display:none' id= 'statusCategoria'>".$linha[5]."</p>";
            }
        }
        else
        {
            echo "<p>Erro ao encontrar o Categoria</p>";
        }
    }
    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }

    ?> 
