<!doctype html>
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
    //print_r($_POST);
	     //exit;
    $id_adocao=$_POST['txtID'];
    
    try
    {
        $sql = $conn->query(
            "select * from adocao where id_adocao=".$id_adocao
        );
        
        $sql->execute();
    
        if($sql->rowCount() == 1)
        {
            foreach($sql as $linha)
            {
                echo "<p style='display:none' id= 'idAdocao'>".$linha[0]."</p>";
                echo "<p style='display:none' id= 'nomeAdocao'>".$linha[1]."</p>";
				echo "<p style='display:none' id= 'nomeanimalAdocao'>".$linha[3]."</p>";
				echo "<p style='display:none' id= 'racaanimalAdocao'>".$linha[4]."</p>";
				echo "<p style='display:none' id= 'sexoanimalAdocao'>".$linha[5]."</p>";
				echo "<p style='display:none' id= 'porteanimalAdocao'>".$linha[6]."</p>";
				echo "<p style='display:none' id= 'enderecoAdocao'>".$linha[7]."</p>";
                echo "<p style='display:none' id= 'numeroAdocao'>".$linha[8]."</p>";
				echo "<p style='display:none' id= 'bairroAdocao'>".$linha[9]."</p>";
				echo "<p style='display:none' id= 'telefoneAdocao'>".$linha[10]."</p>";
                echo "<p style='display:none' id= 'emailAdocao'>".$linha[11]."</p>";
                echo "<p style='display:none' id= 'obsAdocao'>".$linha[12]."</p>";
                echo "<p style='display:none' id= 'statusAdocao'>".$linha[13]."</p>";
            }
        }
        else
        {
            echo "<p>Erro ao encontrar o Adocao</p>";
        }
    }
    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }

    ?> 
</body>
</html>