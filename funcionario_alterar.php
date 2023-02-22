<?php
    include_once("conexao.php");
    
		$id_funcionario=$_POST['txtID'];
        	$nome_funcionario=$_POST['txtNome'];
		$login_funcionario=$_POST['txtLogin'];
		$senha_funcionario=$_POST['txtSenha'];
		$genero_funcionario=$_POST['txtGenero'];
		$cpf_funcionario=$_POST['txtCPF'];
		$nascimento_funcionario=$_POST['txtNascimento'];
		$endereco_funcionario=$_POST['txtEnde'];
		$cep_funcionario=$_POST['txtCEP'];
		$numero_funcionario=$_POST['txtNumero'];
		$complemento_funcionario=$_POST['txtComplemento'];
		$bairro_funcionario= $_POST['txtBairro'];
		$cidade_funcionario= $_POST['txtCidade'];
		$telefone_funcionario=$_POST['txtTelefone'];
		$celular_funcionario=$_POST['txtCelular'];
		$email_funcionario=$_POST['txtEmail'];
        $obs_funcionario=$_POST['txtObs'];
        $status_funcionario=$_POST['txtStatus'];
	
        try
		{ 
			$sql = $conn->prepare(
			"update funcionario set
            nome_funcionario=:nome_funcionario,
			login_funcionario=:login_funcionario,
			senha_funcionario=:senha_funcionario,
			genero_funcionario=:genero_funcionario,
			cpf_funcionario=:cpf_funcionario,
			nascimento_funcionario=:nascimento_funcionario,
			endereco_funcionario=:endereco_funcionario,
			cep_funcionario=:cep_funcionario,
			numero_funcionario=:numero_funcionario,
			complemento_funcionario=:complemento_funcionario,
			bairro_funcionario=:bairro_funcionario,
			cidade_funcionario=:cidade_funcionario,
			telefone_funcionario=:telefone_funcionario,
			celular_funcionario=:celular_funcionario,
			email_funcionario=:email_funcionario,
			obs_funcionario=:obs_funcionario,
		 	status_funcionario=:status_funcionario
            where 
			id_funcionario = :id_funcionario"
			);
			
			$sql->execute(array(
				':id_funcionario'=> $id_funcionario,
				':nome_funcionario'=> $nome_funcionario,
				':login_funcionario'=> $login_funcionario,
				':senha_funcionario'=> $senha_funcionario,
				':genero_funcionario'=> $genero_funcionario,
				':cpf_funcionario'=> $cpf_funcionario,
				':nascimento_funcionario'=> $nascimento_funcionario,
				':endereco_funcionario'=> $endereco_funcionario,
				':cep_funcionario'=> $cep_funcionario,
				':numero_funcionario'=> $numero_funcionario,
				':complemento_funcionario'=> $complemento_funcionario,
				':bairro_funcionario'=> $bairro_funcionario,
				':cidade_funcionario'=> $cidade_funcionario,
				':telefone_funcionario'=> $telefone_funcionario,
				':celular_funcionario'=> $celular_funcionario,
				':email_funcionario'=> $email_funcionario,
				':obs_funcionario'=> $obs_funcionario,
				':status_funcionario'=> $status_funcionario
        ));
		if($sql->rowCount() == 1)
    {
        echo "<p>Dados alterados com sucesso</p>";
        echo "<p style='display:none' id='IDGerado'>".$id_funcionario."</p>";
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