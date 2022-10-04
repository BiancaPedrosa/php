<?php
session_start();
if (isset($_SESSION["servidor"]) and isset($_SESSION["usuario"]) and isset($_SESSION["senha"]))
{
     @ $con = mysqli_connect($_SESSION["servidor"], $_SESSION["usuario"], $_SESSION["senha"], $_SESSION["bd"]);
     if (!$con)
     {
          die("Falha na conexão ao BD");
     }
}
else header("Location: testaconexao.php");

