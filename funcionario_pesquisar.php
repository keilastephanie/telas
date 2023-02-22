<?php
    include_once("conexao.php");
    $id_funcionario=$_POST['txtID'];
    
    try
    {
        $sql = $conn->query(
            "select * from funcionario where id_funcionario=".$id_funcionario
        );
        
        //$sql->execute();
    
        if($sql->rowCount() == 1)
        {
            foreach($sql as $linha)
            {
                echo "<p style='display:none' id='idFuncionario'>".$linha[0]."</p>";
                echo "<p style='display:none' id= 'nomeFuncionario'>".$linha[1]."</p>";
				echo "<p style='display:none' id= 'loginFuncionario'>".$linha[2]."</p>";
				echo "<p style='display:none' id='senhaFuncionario'>".$linha[3]."</p>";
				echo "<p style='display:none' id= 'generoFuncionario'>".$linha[4]."</p>";
				echo "<p style='display:none' id= 'dataCadastroFuncionario'>".$linha[5]."</p>";
				echo "<p style='display:none' id= 'cpfFuncionario'>".$linha[6]."</p>";
				echo "<p style='display:none' id= 'nascimentoFuncionario'>".$linha[7]."</p>";
				echo "<p style='display:none' id= 'enderecoFuncionario'>".$linha[8]."</p>";
				echo "<p style='display:none' id= 'cepFuncionario'>".$linha[9]."</p>";
				echo "<p style='display:none' id= 'numeroFuncionario'>".$linha[10]."</p>";
				echo "<p style='display:none' id= 'complementoFuncionario'>".$linha[11]."</p>";
				echo "<p style='display:none' id= 'bairroFuncionario'>".$linha[12]."</p>";
				echo "<p style='display:none' id= 'cidadeFuncionario'>".$linha[13]."</p>";
				echo "<p style='display:none' id= 'telefoneFuncionario'>".$linha[14]."</p>";
				echo "<p style='display:none' id='celularFuncionario'>".$linha[15]."</p>";
				echo "<p style='display:none' id= 'emailFuncionario'>".$linha[16]."<p/>";
                echo "<p style='display:none' id= 'obsFuncionario'>".$linha[17]."</p>";
               echo "<p style='display:none' id= 'statusFuncionario'>".$linha[18]."</p>";
            }
        }
        else
        {
            echo "<p>Erro ao encontrar o funcionario</p>";
        }
    }
    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }

    ?> 