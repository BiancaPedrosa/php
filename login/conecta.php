<?php 
     $servidor="localhost";
     $usuario="root";
     $senhabd="ifsp";
     $bd = "banco";

     $conexao = mysqli_connect($servidor, $usuario, $senhabd, $bd) or die("Falha na conexão ao BD");