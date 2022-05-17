<?php 
     $servidor="localhost";
     $usuario="usuario";
     $senhabd="ifsp";
     $bd = "banco";

     @ $conexao = mysqli_connect($servidor, $usuario, $senhabd, $bd);
     if (!$conexao) die("Falha na conexão ao BD");