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
    $id_animal=$_POST['txtID'];
    
    try
    {
        $sql = $conn->query(
            "select * from animal where id_animal=".$id_animal
        );
        
        //$sql->execute();
    
        if($sql->rowCount() == 1)
        {
            foreach($sql as $linha)
            {
                echo "<p style='display:none' id= 'idAnimal'>".$linha[0]."</p>";
                echo "<p style='display:none' id= 'nomeAnimal'>".$linha[1]."</p>";
				echo "<p style='display:none' id= 'sexoAnimal'>".$linha[2]."</p>";
				echo "<p style='display:none' id= 'pelagemAnimal'>".$linha[3]."</p>";
				echo "<p style='display:none' id= 'porteAnimal'>".$linha[4]."</p>";
				echo "<p style='display:none' id= 'idadeAnimal'>".$linha[6]."</p>";
				echo "<p style='display:none' id= 'sinaisAnimal'>".$linha[7]."</p>";
				echo "<p style='display:none' id= 'chipAnimal'>".$linha[8]."</p>";
				echo "<p style='display:none' id= 'vacinaAnimal'>".$linha[9]."</p>";
                echo "<p style='display:none' id= 'castracaoAnimal'>".$linha[10]."</p>";
				echo "<p style='display:none' id= 'coleiraidentificacaoAnimal'>".$linha[11]."</p>";
                echo "<p style='display:none' id= 'imgAnimal'>".$linha[12]."</p>";
                echo "<p style='display:none' id= 'obsAnimal'>".$linha[13]."</p>";
                echo "<p style='display:none' id= 'statusAnimal'>".$linha[14]."</p>";
            }
        }
        else
        {
            echo "<p>Erro ao encontrar o Animal</p>";
        }
    }
    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }

    ?> 
</body>
</html>