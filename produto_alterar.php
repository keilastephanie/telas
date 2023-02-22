
    <?php
    include_once("conexao.php");
    //$valor_produto=$_POST['txtValor'];
    //print_r($_POST);
    
    

		$id_produto=$_POST['joaquim'];
        $nome_produto=$_POST['txtNome'];
        $descricao_produto=$_POST['txtDescricao'];
        $qtde_produto=$_POST['txtQtde'];
        $id_categoria=$_POST['txtIdCategoria'];
		$valor_produto=$_POST['txtValor'];
		$img_produto=$_POST['txtImg'];
        $obs_produto=$_POST['txtObs'];
        $status_produto=$_POST['txtStatus'];
        
       
        try
		{ 
			$sql = $conn->prepare(
			"update produto set
            nome_produto=:nome_produto,
			descricao_produto=:descricao_produto,
			qtde_produto=:qtde_produto,
            id_categoria=:id_categoria,
			valor_produto=:valor_produto,
            img_produto=:img_produto,
			obs_produto=:obs_produto,
		 	status_produto=:status_produto
            where 
			id_produto = :id_produto"
			);
			
			$sql->execute(array(
				':id_produto'=> $id_produto,
				':nome_produto'=> $nome_produto,
				':descricao_produto'=> $descricao_produto,
				':qtde_produto'=> $qtde_produto,
                ':id_categoria'=> $id_categoria,
                ':valor_produto'=> $valor_produto,
				':img_produto'=> $img_produto,
				':obs_produto'=> $obs_produto,
				':status_produto'=> $status_produto
        ));
		if($sql->rowCount() == 1)
    {
        echo "<p>Dados alterados com sucesso</p>";
        echo "<p style='display:none' id='IDGerado'>".$id_produto."</p>";
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
			