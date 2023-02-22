
    	<?php
    	include_once("conexao.php");
    
    	
		$id_fornecedor=$_POST['txtID'];
        $nome_fornecedor=$_POST['txtNome'];
		$login_fornecedor=$_POST['txtLogin'];
		$senha_fornecedor=$_POST['txtSenha'];
		$cpf_fornecedor=$_POST['txtCPF'];
		$nascimento_fornecedor=$_POST['txtNascimento'];
		$genero_fornecedor=$_POST['txtGenero'];
		$celular_fornecedor=$_POST['txtCelular'];
		$telefone_fornecedor=$_POST['txtTelefone'];
		$email_fornecedor=$_POST['txtEmail'];
		$endereco_fornecedor=$_POST['txtEnde'];
		$cep_fornecedor=$_POST['txtCEP'];
		$bairro_fornecedor=$_POST['txtBairro'];
		$cidade_fornecedor=$_POST['txtCidade'];
        $obs_fornecedor=$_POST['txtObs'];
        $status_fornecedor=$_POST['txtStatus'];
	
        try
		{
			$sql = $conn->prepare(
			"update fornecedor set
            nome_fornecedor=:nome_fornecedor,
			login_fornecedor=:login_fornecedor,
			senha_fornecedor=:senha_fornecedor,
			cpf_fornecedor=:cpf_fornecedor,
			nascimento_fornecedor=:nascimento_fornecedor,
			genero_fornecedor=:genero_fornecedor,
			celular_fornecedor=:celular_fornecedor,
			telefone_fornecedor=:telefone_fornecedor,
			email_fornecedor=:email_fornecedor,
			endereco_fornecedor=:endereco_fornecedor,
			cep_fornecedor=:cep_fornecedor,
			bairro_fornecedor=:bairro_fornecedor,
			cidade_fornecedor=:cidade_fornecedor,
			obs_fornecedor=:obs_fornecedor,
			status_fornecedor=:status_fornecedor
			where 
			id_fornecedor=:id_fornecedor"
		);
			
			$sql->execute(array(
			':id_fornecedor'=> $id_fornecedor,
			':nome_fornecedor'=> $nome_fornecedor,
			':login_fornecedor'=> $login_fornecedor,
			':senha_fornecedor'=> $senha_fornecedor,
			':cpf_fornecedor'=> $cpf_fornecedor,
			':nascimento_fornecedor'=> $nascimento_fornecedor,
			':genero_fornecedor'=> $genero_fornecedor,
			':celular_fornecedor'=> $celular_fornecedor,
			':telefone_fornecedor'=> $telefone_fornecedor,
			':email_fornecedor'=> $email_fornecedor,
			':endereco_fornecedor'=> $endereco_fornecedor,
			':cep_fornecedor'=> $cep_fornecedor,
			':bairro_fornecedor'=> $bairro_fornecedor,
			':cidade_fornecedor'=> $cidade_fornecedor,
			':obs_fornecedor'=> $obs_fornecedor,
			':status_fornecedor'=> $status_fornecedor
	));
			if($sql->rowCount() == 1)
		{
			echo "<p>Dados alterados com sucesso</p>";
			echo "<p style='display:none' id='IDGerado'>".$id_fornecedor."</p>";
		}
		else
		{
			echo "<p>Erro ao realizar a alteração</p>";
		}
	}
	catch (PDOException $ex)
	{
		echo $ex->getMessage();
	}
	
	
	?>