<?php

 include_once("conexao.php");
   $usuarioLogado = "";
   $tentouEntrar = 0;

   if($_POST)
   {
    $tentouEntrar = 1;
    $login=$_POST['txtLogin'];
    $senha =$_POST ['txtSenha'];
    
    $sql = $conn->query("select * from funcionario
         where
          login_funcionario ='".$login."' and
          senha_funcionario ='".$senha."'");

    if($sql->rowCount()==1)
    {
        foreach($sql as $linha)
        {
            $usuarioLogado = $linha['login_funcionario'];

            session_start();

            $_SESSION ['usuarioSistemaID']= $linha ['id_funcionario'];
            $_SESSION ['usuarioSistemaLogin'] = $linha ['login_funcionario'];
            $_SESSION['usuarioSistemaNome'] =$linha ['nome_funcionaro'];
        }
    }
    
    if($usuarioLogado == "" && $tentouEntrar == 1)
     {
    echo "Usuário ou senha inválido";
     
    
    }else if($usuarioLogado != "" && $tentouEntrar == 1){
    echo "Usuário seja bem vindo";
    header("Location:widget.php");
     }
    else
    {
        echo" usuario ou senha Inválido";
    }
    
   }
?>