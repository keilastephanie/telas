
    <?php
		//print_r($_POST);
		// exit;
     	include_once("conexao.php");
    
    
	 	$nome_animal=$_POST['txtNome'];
		$sexo_animal=$_POST['txtSexo'];
		$pelagem_animal=$_POST['txtPelagem'];
		$porte_animal=$_POST['txtPorte'];
		$datacadastro_animal=$_POST['txtData'];
		$idade_animal=$_POST['txtIdade'];
		$sinais_animal=$_POST['txtSinais'];
		$chip_animal=$_POST['txtChip'];
		$vacina_animal=$_POST['txtVacina'];
		$castracao_animal=$_POST['txtCastracao'];
		$coleiraidentificacao_animal=$_POST['txtColeira'];
		$img_animal=$_POST['txtImg'];
        $obs_animal=$_POST['txtObs'];
        $status_animal=$_POST['txtStatus'];


		try
		{
		$sql = $conn->prepare(
			"insert into animal
			(
				nome_animal,
				sexo_animal,
				pelagem_animal,
				porte_animal,
				idade_animal,
				sinais_animal,
				chip_animal,
				vacina_animal,
				castracao_animal,
				coleiraidentificacao_animal,
				img_animal,
				obs_animal,
				status_animal
				
            )
            values
            (
				:nome_animal,
				:sexo_animal,
				:pelagem_animal,
				:porte_animal,
				:idade_animal,
				:sinais_animal,
				:chip_animal,
				:vacina_animal,
				:castracao_animal,
				:coleiraidentificacao_animal,
				:img_animal,
				:obs_animal,
				:status_animal

            )");

            $sql->execute(array(
                ':nome_animal'=>$nome_animal,
				':sexo_animal'=>$sexo_animal,
				':pelagem_animal'=>$pelagem_animal,
				':porte_animal'=>$porte_animal,
				':idade_animal'=>$idade_animal,
				':sinais_animal'=>$sinais_animal,
				':chip_animal'=>$chip_animal,
				':vacina_animal'=>$vacina_animal,
				':castracao_animal'=>$castracao_animal,
				':coleiraidentificacao_animal'=>$coleiraidentificacao_animal,
				':img_animal'=>$img_animal,
				':obs_animal'=>$obs_animal,
				':status_animal'=>$status_animal

				
			  
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
		
