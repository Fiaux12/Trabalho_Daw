<?php

    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

        require 'conexao.php';
        require 'Usuario.class.php';

        $u = new Usuario();
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($u->login($email, $senha) == true){
            if(isset($_SESSION['idUsuario'])){
                header("Location: index.php");
                
            }
        }else{
            $login = 'invalido';
            $_SESSION['login']=$login;
            header("Location: logar.php");
        }

    }else{
        header("Location: logar.php");
    }

?>