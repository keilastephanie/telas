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
		//print_r($_POST);
		 //exit;
    	include_once("conexao.php");
		
		$id_animal=$_POST['txtID'];
        $nome_animal=$_POST['txtNome'];
		$sexo_animal=$_POST['txtSexo'];
		$pelagem_animal=$_POST['txtPelagem'];
		$porte_animal=$_POST['txtPorte'];
		$idade_animal=$_POST['txtIdade'];
		$sinais_animal=$_POST['txtSinais'];
		$chip_animal=$_POST['txtChip'];
		$vacina_animal=$_POST['txtVacina'];
		$castracao_animal=$_POST['txtCastracao'];
		$coleiraidentificacao=$_POST['txtColeira'];
		$img_animal=$_POST['txtImg'];
        $obs_animal=$_POST['txtObs'];
        $status_animal=$_POST['txtStatus'];
		




		try
		{
			$sql = $conn->prepare(
				"update animal set
				nome_animal=:nome_animal,
				sexo_animal=:sexo_animal,
				pelagem_animal=:pelagem_animal,
				porte_animal=:porte_animal,
				idade_animal=:idade_animal,
				sinais_animal=:sinais_animal,
				chip_animal=:chip_animal,
				vacina_animal=:vacina_animal,
				castracao_animal=:castracao_animal,
				coleiraidentificacao_animal=:coleiraidentificacao_animal,
				img_animal=:img_animal,
				obs_animal=:obs_animal,
				status_animal=:status_animal
				where
				id_animal=:id_animal"
			);
		
				
		
				$sql->execute(array(
					
				':id_animal'=> $id_animal,
				':nome_animal'=> $nome_animal,
				':sexo_animal'=> $sexo_animal,
				':pelagem_animal'=> $pelagem_animal,
				':porte_animal'=> $porte_animal,
				':idade_animal'=> $idade_animal,
				':sinais_animal'=> $sinais_animal,
				':chip_animal'=> $chip_animal,
				':vacina_animal'=> $vacina_animal,
				':castracao_animal'=> $castracao_animal,
				':coleiraidentificacao_animal'=> $coleiraidentificacao,
				':img_animal'=> $img_animal,
				':obs_animal'=> $obs_animal,
				':status_animal'=> $status_animal
				
			
			));
			if($sql->rowCount() == 1)
		{
			echo "<p>Dados alterados com sucesso</p>";
			echo "<p style='display:none' id='IDGerado'>".$id_animal."</p>";
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

		
		








				
			
