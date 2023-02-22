<?php
    include_once("conexao.php");

    $id_contato=$_POST['txtID'];
    
    try
    {
        $sql = $conn->prepare(
            "delete from contato where id_contato=:id_contato"
        );
        
        $sql->execute(array(
            ':id_contato' => $id_contato     
        ));
    
        if($sql->rowCount() == 1)
        {
            echo "<p>Dados Excluidos com sucesso</p>";
            echo "<p  style='display:none' id='IDGerado'>".$id_contato."</p>";
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