<?php

session_start();

if(isset($_POST['btnLogin'])){
    //Simulando o banco de dados
    $usuario = 'admin';
    $senhaBanco = crypt(md5('123456'),'etec');

    $senhaUserCriptografado = crypt(md5($_POST['pass']),'aula1');

    //senha informada pelo usuário
    //$senha = $_POST['pass'];
    //$md5Senha = md5($_POST['pass']);
    //$cryptSenha = crypt($md5Senha,'etec');

    //$cryptSenha = crypt(md5($_POST['pass']),'etec');

        if($usuario == $_POST['username'] && $senhaBanco == $ {
            $_SESSION['usuario'] = $_POST['username'];
            header('Location: principal.php');

        }else{
            header('Location: index.php?erro=1');
        }
}