<?php

function logar($login, $senha){
    if($login == "admin" && $senha == "123"){
        return header("location:paginas/galeria/lista.php");
    }
    return header("location:index.php");
}

logar($_POST['login'], $_POST['senha']);