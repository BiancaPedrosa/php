<?php
     include "cabecalho.php";
     session_start();
     $conn = new mysqli($_POST['servidor'],$_POST['usuario'], $_POST['senha'], $_POST['bd']);
     // Check connection
     if ($conn->connect_error) {
         die("<p class='alert alert-danger'>Connection failed:  {$conn->connect_error}");
     }
     else{
          //registrar no session os dados da conexao para uso futuro
          echo "<p class='alert alert-success'>Conexao bem sucedida</p>";
          $_SESSION['servidor']=$_POST['servidor'];
          $_SESSION['usuario']=$_POST['usuario'];
          $_SESSION['senha']=$_POST['senha'];
          $_SESSION['bd']=$_POST['bd'];
     }
     header("Location: index.php");
     include "rodape.php";
?>
