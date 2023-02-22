<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="js/jquery-3.6.0.js">
    
    <?php
    include_once("conexao.php");
    
		$id_adocao=$_POST['txtID'];
       
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
			"update adocao set
            nome_adocao=:nome_adocao,
			nomeanimal_adocao=:nomeanimal_adocao,
			racaanimal_adocao =:racaanimal_adocao,
			sexoanimal_adocao=:sexoanimal_adocao,
			porteanimal_adocao=:porteanimal_adocao,
			endereco_adocao=:endereco_adocao,
			numero_adocao=:numero_adocao,
			bairro_adocao=:bairro_adocao,
			telefone_adocao=:telefone_adocao,
			email_adocao=:email_adocao,
			obs_adocao=:obs_adocao,
            status_adocao=:status_adocao

            where 
			id_adocao = :id_adocao"
			);
			
			$sql->execute(array(
				':id_adocao'=> $id_adocao,
				':nome_adocao'=> $nome_adocao,
				':nomeanimal_adocao'=> $nomeanimal_adocao,
				':racaanimal_adocao'=> $racaanimal_adocao,
				':sexoanimal_adocao'=> $sexoanimal_adocao,
				':porteanimal_adocao'=> $porteanimal_adocao,
				':endereco_adocao'=> $endereco_adocao,
				':numero_adocao'=> $numero_adocao,
				':bairro_adocao'=> $bairro_adocao,
				':telefone_adocao'=> $telefone_adocao,
				':email_adocao'=> $email_adocao,
				':obs_adocao'=> $obs_adocao,
				':status_adocao'=> $status_adocao
        ));
		if($sql->rowCount() == 1)
    {
        echo "<p>Dados alterados com sucesso</p>";
        echo "<p style='display:none' id='IDGerado'>".$id_adocao."</p>";
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
			
       
     
		
        
       
        
	