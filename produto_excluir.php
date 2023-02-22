
    
    <?php
    include_once("conexao.php");

    $id_produto=$_POST['txtID'];
    
    try
    {
        $sql = $conn->prepare(
            "delete from produto where id_produto=:id_produto"
        );
        
        $sql->execute(array(
            ':id_produto' => $id_produto     
        ));
    
        if($sql->rowCount() == 1)
        {
            echo "<p>Dados Excluidos com sucesso</p>";
            echo "<p style='display:none' id='IDGerado'>".$id_produto."</p>";
        }
        else
        {
            echo "<p>Erro ao realizar a exclusão</p>";
        }
    }
    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }
    
    
    ?>
    
