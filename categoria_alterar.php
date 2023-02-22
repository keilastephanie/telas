
    
    <?php
    include_once("conexao.php");
    
    
		$id_categoria=$_POST['categoria'];
        $nome_categoria=$_POST['Nome'];
		$localarmazenagem_categoria=$_POST['LocalArmazenagem'];
		$descricao_categoria=$_POST['txtDescricao'];
		$obs_categoria=$_POST['txtObs'];
		$status_categoria=$_POST['txtStatus'];
		
        try
        {
            $sql = $conn->prepare("update categoria set
            nome_categoria=:nome_categoria,
			localarmazenagem_categoria=:localarmazenagem_categoria,
			descricao_categoria=:descricao_categoria,
			obs_categoria=:obs_categoria,
		 	status_categoria=:status_categoria
            where 
            id_categoria=:id_categoria
        ");
        
          
	
      
        $sql->execute(array(
				':id_categoria'=>$id_categoria,
				':nome_categoria'=>$nome_categoria,
				':localarmazenagem_categoria'=>$localarmazenagem_categoria,
				':descricao_categoria'=>$descricao_categoria,
				':obs_categoria'=>$obs_categoria,
				':status_categoria'=>$status_categoria
        )); 
        if($sql->rowCount() == 1)
    {
    echo "<p>Dados alterados com sucesso</p>";
    echo "<p style='display:none' id='IDGerado'>".$id_categoria."</p>";
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
        
   
 
    
    
   
    






