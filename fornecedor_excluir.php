
    
    <?php
    include_once("conexao.php");
    
    if($_POST)
    {
        $id = $_POST['txtID'];
        
        
        $sql = $conn->prepare("delete from fornecedor where id_fornecedor=:id_fornecedor");
        
        $sql->execute(array(
            ':id_fornecedor'=>$id
        ));

        if($sql->rowCount() == 1)
        {
            echo "<p>Dados excluidos com sucesso</p>";
           
        }
    }
    else
    {
        header("Location:frm_fornecedor.php?tela=fornecedor");
    }
