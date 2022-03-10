<?php

if(isset($_POST['btnLogin'])){
    //senha armazenada
    $senhaBanco = crypt(md5('123456'),'etec');

    //senha informada pelo usuário
    $senha = $_POST['pass'];
    $md5Senha = md5($_POST['pass']);
    $cryptSenha = crypt($md5Senha,'etec');

    //$cryptSenha = crypt(md5($_POST['pass']),'etec');

        if($cryptSenha === $senhaBanco){
            header('Location: principal.php');

        }else{
            header('Location: index.php?erro=1');
        }
}