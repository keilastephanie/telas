
    <?php
    include_once("conexao.php");

    $id_categoria=$_POST['categoria'];
    
    try
    {
        $sql = $conn->prepare(
            "delete from categoria where id_categoria=:id_categoria"
        );
        
        $sql->execute(array(
            ':id_categoria' => $id_categoria     
        ));
    
        if($sql->rowCount() == 1)
        {
            echo "<p>Dados Excluidos com sucesso</p>";
            echo "<p style='display:none' id='IDGerado'>".$id_categoria."</p>";
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
    
