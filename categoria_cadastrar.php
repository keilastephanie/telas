
    <?php
	//print_r($_POST);
	 //exit;
     include_once("conexao.php");

	 
    
        $nome_categoria=$_POST['Nome'];
		$localarmazenagem_categoria=$_POST['LocalArmazenagem'];
		$descricao_categoria=$_POST['txtDescricao'];
        $obs_categoria=$_POST['txtObs'];
        $status_categoria=$_POST['txtStatus'];
		
		try
		{
            $sql = $conn->prepare(
			"insert into categoria
			(nome_categoria,
			localarmazenagem_categoria,
			descricao_categoria,
			obs_categoria,
			status_categoria
            )
            values
            (
			:nome_categoria,
		    :localarmazenagem_categoria,
			:descricao_categoria,
			:obs_categoria,
			:status_categoria

            )");

            $sql->execute(array(
                ':nome_categoria'=>$nome_categoria,
			  	':localarmazenagem_categoria'=>$localarmazenagem_categoria,
				':descricao_categoria'=>$descricao_categoria,
				':obs_categoria'=>$obs_categoria,
				':status_categoria'=>$status_categoria
            ));
			if($sql->rowCount() == 1)
			{
				echo "<p>Dados cadastrados com sucesso</p>";
				echo "<p style='display:none' id='IDGerado'>".$conn->lastInsertId()."</p>";
			}
			else
			{
				echo "<p>Erro ao realizar o cadastro</p>";
			}
		}
		catch (PDOException $ex)
		{
			echo $ex->getMessage();
		}
		
		
		?>
		
