<?php
    session_start();
    $login =  $_POST['login'];
    $senha =  $_POST['senha'];
    if ($login == 'master' && $senha == 'chef') 
    {	    
        $_SESSION['horalogin']=time();
        header("Location: cardapio.php");
    }
    else{
        header("Location: sair.php");
    }
?>