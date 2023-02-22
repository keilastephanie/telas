
    
        <?php
	    //print_r($_POST);
	    // exit;
     include_once("conexao.php");

	 
    
        $nome_adocao=$_POST['txtNomeAdocao'];
		$nomeanimal_adocao=$_POST['txtNomeAnimal'];
		$racaanimal_adocao=$_POST['txtRacaAnimal'];
		$sexoanimal_adocao=$_POST['txtSexoAnimal'];
		$porteanimal_adocao=$_POST['txtPorteAnimal'];
		$endereco_adocao=$_POST['txtEndereco'];
		$numero_adocao=$_POST['txtNumero'];
		$bairro_adocao=$_POST['txtBairro'];
		$telefone_adocao=$_POST['txtTelefone'];
		$email_adocao=$_POST['txtEmail'];
        $obs_adocao=$_POST['txtObs'];
        $status_adocao=$_POST['txtStatus'];

		try
		{
            $sql = $conn->prepare(
			"insert into adocao
			(nome_adocao,
			nomeanimal_adocao,
			racaanimal_adocao,
			sexoanimal_adocao,
			porteanimal_adocao,
			endereco_adocao,
			numero_adocao,
			bairro_adocao,
			telefone_adocao,
			email_adocao,
			obs_adocao,
			status_adocao
            )
            values
            (
			:nome_adocao,
		    :nomeanimal_adocao,
			:racaanimal_adocao,
			:sexoanimal_adocao,
			:porteanimal_adocao,
			:endereco_adocao,
			:numero_adocao,
			:bairro_adocao,
			:telefone_adocao,
			:email_adocao,
			:obs_adocao,
			:status_adocao

            )");

            $sql->execute(array(
                ':nome_adocao'=>$nome_adocao,
			  	':nomeanimal_adocao'=>$nomeanimal_adocao,
				':racaanimal_adocao'=>$racaanimal_adocao,
				':sexoanimal_adocao'=>$sexoanimal_adocao,
				':porteanimal_adocao'=>$porteanimal_adocao,
				':endereco_adocao'=>$endereco_adocao,
				':numero_adocao'=>$numero_adocao,
				':bairro_adocao'=>$bairro_adocao,
				':telefone_adocao'=>$telefone_adocao,
				':email_adocao'=>$email_adocao,
				':obs_adocao'=>$obs_adocao,
				':status_adocao'=>$status_adocao 
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
