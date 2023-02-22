<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="js/jquery-3.6.0.js">

<body>
    
    <?php
    include_once("conexao.php");

    $id_adocao=$_POST['txtID'];
    
    try
    {
        $sql = $conn->prepare(
            "delete from adocao where id_adocao=:id_adocao"
        );
        
        $sql->execute(array(
            ':id_adocao' => $id_adocao 
        ));
    
        if($sql->rowCount() == 1)
        {
            echo "<p>Dados Excluidos com sucesso</p>";
            echo "<p style='display:none' id='IDGerado'>".$id_adocao."</p>";
        }
        else
        {
            echo "<p>Erro ao realizar a exclusão</p>";
        }
    }
    catch (PDOException $ex)
    {
        echo $ex->getMessage();
    }
    
    
    ?>
   
</body>
</html>