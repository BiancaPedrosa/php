<?php
    session_start();
    $ID_loja=$_POST['ID_loja'];
    $Nomeloja=$_POST['Nomeloja'];
    $CEP=$_POST['CEP'];
    $Email=$_POST['Email'];
    $TelefoneLoja=$_POST['TelefoneLoja'];


    include("conexão.php");

    //inserindo dados do formulario no bd
    $query = "insert into tabela_loja ( Nomeloja, CEP, Email, TelefoneLoja) 
    values ('$Nomeloja','$CEP','$Email','$TelefoneLoja')";
    $result = mysqli_query($db,$query);

    if($result){
         header('location:tabela_ver_lojas_conveniadas.php ');
    }
    else{
        echo mysqli_error($db);       
    } 

  
?>
