<?php

        include_once('conexão.php');

          $ID=$_POST['ID'];
          $Saida = $_POST['Saida'];
          $Convenio = $_POST['Convenio'];
          $Permanencia= $_POST["Permanencia"];
          $TarifaEstacionamento=$_POST['TarifaEstacionamento'];
        
           $query=mysqli_query($db, "update tabela_veiculo set Status='$Status',TarifaEstacionamento='$TarifaEstacionamento', Convenio='$Convenio' where ID='$ID'");
            
           if(!$query){
              echo mysqli_error($db);
          }else{
            header("location:gerenciar_veiculos_fora.php?ID=$ID");
          }
?>