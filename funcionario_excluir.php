<?php
    include_once("conexao.php");

    $id_funcionario=$_POST['txtID'];
    
    try
    {
        $sql = $conn->prepare(
            "delete from funcionario where id_funcionario=:id_funcionario"
        );
        
        $sql->execute(array(
            ':id_funcionario' => $id_funcionario     
        ));
    
        if($sql->rowCount() == 1)
        {
            echo "<p>Dados Excluidos com sucesso</p>";
            echo "<p style='display:none' id='IDGerado'>".$id_funcionario."</p>";
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
    