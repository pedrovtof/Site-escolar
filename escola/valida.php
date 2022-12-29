<?php
    session_start();

        include_once("conectar.php");

        $usr=$_POST['nome'];
        $doc=$_POST['cpf'];
        $ctt=$_POST['tel'];
        $text=$_POST['redacao'];

        /*print("usuario: ".$usuario."<br>documento: ".$documento."<br>contato: ".$contato."<br>texto: ".$texto."<br>")*/
        
       $resposta_usr = "insert into ALUNOS_INSCRICAO (USR_NOME,USR_DOCUMENTO,USR_TELEFONE1,USR_DATA_CADASTRO,USR_REDACAO,USR_NOTA,USR_STATUS)values('$usr','$doc', '$ctt', NOW(),'$text',0,1)";

       $resposta_usr_retorno = mysqli_query($conn ,$resposta_usr);

      if(mysqli_insert_id($conn)){
            $_SESSION['msg'] = "<article style='color:green'><strong>Usuario cadastrado com sucesso!</strong></article>";
            header("Location: index.php");
      }else{
            $_SESSION['msg'] = "<article style='color:red'><strong>Usuario Nao cadastrado! verifique os dados ou entre em contato com TI</strong></article>";
            header("Location: index.php");
      }
        
?>
 

