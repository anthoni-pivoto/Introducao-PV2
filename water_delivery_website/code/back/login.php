<?php

include('conexao.php');

if(isset($_POST['myemail']) || isset($_POST['password'])){
    if(strlen($_POST['myemail']) == 0 ){
        echo "Preencha seu email";
    }
    else if(strlen($_POST['password']) == 0) {
        echo "Preencha sua senha";
    }
    else{
        $email = pg_escape_string($_POST['myemail']);
        $senha = pg_escape_string($_POST['password']);

        $sql = "select sh_senha, em_email from tb_pessoa where em_email ilike '$email' and sh_senha = '$senha'";
        $insertion = pg_query($conn,$sql) or die("Falha na conexao do codigo SQL" . pg_last_error());
        $qtd = pg_num_rows($insertion);
        if($qtd == 1){
             $usuario = pg_fetch_assoc($insertion);
             if(!isset($_SESSION)){
                session_start();
             }
             $_SESSION['id'] = $usuario['cd_pessoa'];
             $_SESSION['email'] = $usuario['em_email'];
             $_SESSION['nome'] = $usuario['nm_pessoa'];

             header("Location: ../front/logged.php");
            }
        else{
            echo "Email ou senha incorretos";
        }
    }
}
?>