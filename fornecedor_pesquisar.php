<!doctype html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="estilo.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once("conexao.php");
    $id_fornecedor=$_POST['txtID'];
    
    try
    {
        $sql = $conn->query(
            "select * from fornecedor where id_fornecedor=".$id_fornecedor
        );
        
        $sql->execute();
    
        if($sql->rowCount() == 1)
        {
            foreach($sql as $linha)
            {
                echo "<p style='display:none' id= 'idFornecedor'>".$linha[0]."</p>";
                echo "<p style='display:none' id= 'nomeFornecedor'>".$linha[1]."</p>";
				echo "<p style='display:none' id= 'loginFornecedor'>".$linha[2]."</p>";
				echo "<p style='display:none' id= 'senhaFornecedor'>".$linha[3]."</p>";
                echo "<p style='display:none' id= 'cpfFornecedor'>".$linha[4]."</p>";
                echo "<p style='display:none' id= 'nascimentoFornecedor'>".$linha[5]."</p>";
				echo "<p style='display:none' id= 'generoFornecedor'>".$linha[6]."</p>";
				echo "<p style='display:none' id= 'dataCadastroFornecedor'>".$linha[7]."</p>";
                echo "<p style='display:none' id= 'celularFornecedor'>".$linha[8]."</p>";
                echo "<p style='display:none' id= 'telefoneFornecedor'>".$linha[9]."</p>";
                echo "<p style='display:none' id= 'emailFornecedor'>".$linha[10]."<p/>";
				echo "<p style='display:none' id= 'enderecoFornecedor'>".$linha[11]."</p>";
				echo "<p style='display:none' id= 'cepFornecedor'>".$linha[12]."</p>";
				echo "<p style='display:none' id= 'bairroFornecedor'>".$linha[13]."</p>";
				echo "<p style='display:none' id= 'cidadeFornecedor'>".$linha[14]."</p>";
                echo "<p style='display:none' id= 'obsFornecedor'>".$linha[15]."</p>";
                echo "<p style='display:none' id= 'statusFornecedor'>".$linha[16]."</p>";
            }
        }
        else
        {
            echo "<p>Erro ao encontrar o Fornecedor</p>";
        }
    }
    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }

    ?> 
</body>
</html>
