
    <?php
    include_once("conexao.php");
    $id_produto=$_POST['joaquim'];
   // print_r($_POST);
    
    try
    {
        $sql = $conn->query(
            "select * from produto where id_produto=".$id_produto
        );
        
        //$sql->execute();
    
        if($sql->rowCount() == 1)
        {
            foreach($sql as $linha)
            {
                echo "<p style='display:none' id= 'idProduto'>".$linha[0]."</p>";
                echo "<p style='display:none' id= 'nomeProduto'>".$linha[1]."</p>";
				echo "<p style='display:none' id= 'descricaoProduto'>".$linha[2]."</p>";
				echo "<p style='display:none' id= 'qtdeProduto'>".$linha[3]."</p>";
                echo "<p style='display:none' id= 'idCategoria'>".$linha[4]."</p>";
				echo "<p style='display:none' id= 'valorProduto'>".$linha[5]."</p>";
				echo "<p style='display:none' id= 'dataCadastroProduto'>".$linha[6]."</p>";
				echo "<p style='display:none' id= 'imgProduto'>".$linha[7]."</p>";
                echo "<p style='display:none' id= 'obsProduto'>".$linha[8]."</p>";
                echo "<p style='display:none' id= 'statusProduto'>".$linha[9]."</p>";
            }
        }
        else
        {
            echo "<p>Erro ao encontrar o produto</p>";
        }
    }
    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }

    ?> 
