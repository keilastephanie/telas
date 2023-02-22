
    
    <?php
	//print_r($_POST);
	 //exit;
     include_once("conexao.php");

        $nome_funcionario=$_POST['txtNome'];
		$login_funcionario=$_POST['txtLogin'];
		$senha_funcionario=$_POST['txtSenha'];
		$genero_funcionario=$_POST['txtGenero'];
		$datacadastro_funcionario=$_POST['txtCadastro'];
		$cpf_funcionario=$_POST['txtCPF'];
		$nascimento_funcionario=$_POST['txtNascimento'];
		$endereco_funcionario=$_POST['txtEnde'];
		$cep_funcionario=$_POST['txtCEP'];
		$numero_funcionario=$_POST['txtNumero'];
		$complemento_funcionario=$_POST['txtComplemento'];
		$bairro_funcionario=$_POST['txtBairro'];
		$cidade_funcionario=$_POST['txtCidade'];
		$telefone_funcionario=$_POST['txtTelefone'];
		$celular_funcionario=$_POST['txtCelular'];
		$email_funcionario=$_POST['txtEmail'];
        $obs_funcionario=$_POST['txtObs'];
        $status_funcionario=$_POST['txtStatus'];

		try
		{
            $sql = $conn->prepare(
			"insert into funcionario
			(nome_funcionario,
			login_funcionario,
			senha_funcionario,
			genero_funcionario,
			cpf_funcionario,
			nascimento_funcionario,
			endereco_funcionario,
			cep_funcionario,
			numero_funcionario,
			complemento_funcionario,
			bairro_funcionario,
			cidade_funcionario,
			telefone_funcionario,
			celular_funcionario,
			email_funcionario,
			obs_funcionario,
			status_funcionario
            )
            values
            (
			:nome_funcionario,
		    :login_funcionario,
			:senha_funcionario,
			:genero_funcionario,
			:cpf_funcionario,
			:nascimento_funcionario,
			:endereco_funcionario,
			:cep_funcionario,
			:numero_funcionario,
			:complemento_funcionario,
			:bairro_funcionario,
			:cidade_funcionario,
			:telefone_funcionario,
			:celular_funcionario,
			:email_funcionario,
			:obs_funcionario,
			:status_funcionario

            )");

            $sql->execute(array(
                ':nome_funcionario'=>$nome_funcionario,
			  	':login_funcionario'=>$login_funcionario,
				':senha_funcionario'=>$senha_funcionario,
				':genero_funcionario'=>$genero_funcionario,
				':cpf_funcionario'=>$cpf_funcionario,
				':nascimento_funcionario'=>$nascimento_funcionario,
				':endereco_funcionario'=>$endereco_funcionario,
				':cep_funcionario'=>$cep_funcionario,
				':numero_funcionario'=>$numero_funcionario,
				':complemento_funcionario'=>$complemento_funcionario,
				':bairro_funcionario'=>$bairro_funcionario,
				':cidade_funcionario'=>$cidade_funcionario,
				':telefone_funcionario'=>$telefone_funcionario,
				':celular_funcionario'=>$celular_funcionario,
				':email_funcionario'=>$email_funcionario,
				':obs_funcionario'=>$obs_funcionario,
				':status_funcionario'=>$status_funcionario
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
		
