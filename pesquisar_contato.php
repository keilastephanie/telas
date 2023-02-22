<?php
	include_once("conexao.php");

    $id_contato=$_POST['txtID'];
	try
	{
        $sql = $conn->query(
            "select * from contato where id_Contato=".$id_contato
        );
		
		if($sql->rowCount() == 1)
        {
            foreach($sql as $linha)
            {
                echo "<p  style='display:none' id='idContato'>".$linha[0]."</p>";
                echo "<p  style='display:none' id= 'nomeContato'>".$linha[1]."</p>";
            	echo "<p  style='display:none' id= 'dataContato'>".$linha[2]."</p>";
			    echo "<p  style='display:none'  id='emailContato'>".$linha[3]."<p/>";
                echo "<p  style='display:none' id= 'telefoneContato'>".$linha[4]."</p>";
                echo "<p  style='display:none' id='obsContato'>".$linha[5]."</p>";
                echo "<p  style='display:none' id='statusContato'>".$linha[6]."</p>";
            }
        }
        else
        {
            echo "<p>Erro ao encontrar o contato</p>";
        }
    }

    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }

?>