<?php
    session_start();
    $Modelo=$_POST['Modelo'];
    $Cor=$_POST['Cor'];
    $Marca=$_POST['Marca'];
    $Placa=$_POST['Placa'];
    $NomeProprietario=$_POST['NomeProprietario'];
    $TelefoneProprietario=$_POST['TelefoneProprietario'];
    $NumeroEstacionamento=$_POST['NumeroEstacionamento'];
    $Entrada = date("Y-m-d H:i:s");

    include("conexão.php");


    $query=("insert into  tabela_veiculo(NumeroEstacionamento, Modelo, Cor, Marca,  Placa, NomeProprietario, TelefoneProprietario, Entrada) 
    values('$NumeroEstacionamento','$Modelo','$Cor','$Marca','$Placa','$NomeProprietario','$TelefoneProprietario','$Entrada');");
    $resultado = mysqli_query($db,$query);

    if($resultado){

    header('location:tabela_ver_veiculos_dentro.php ');
    }
    else
        {
        echo mysqli_error($db)." ".$Entrada;       
        } 

  
?>
