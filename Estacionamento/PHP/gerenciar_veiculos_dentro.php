<!doctype html>
<html class="no-js" lang="pt-br">

  <head>
    
    <title>Estacione Aqui</title>
    <link rel="stylesheet" href="..\CSS\estilo_barra_de_rolagem.css">
    <link rel="icon" href="https://img.icons8.com/plasticine/50/000000/car--v2.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>

  <body class="section" style="background: #45d6b2;  font-family: 'Trirong', serif;">
    <div class="container mt-4"  style="background: rgba(215, 246, 236, 0.87);border-radius: 30px 30px;  font-family: 'Trirong', serif;">
      
        <br>
        <?php
        session_start();
        include('conexão.php');
        include_once('menu.php');
        
      
        $ID=$_GET['ID'];
        $ret=mysqli_query($db,"select * from tabela_veiculo where ID='$ID'");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {

      ?>
      <div class="bloco_tabela" style="line-height: 15px; background: #e2fcec;  border-radius: 30px 30px; width: 94%;  margin: 30px  ;">                       
        
        <br>
        <h3 style="line-height:50px;text-align: center; color:white; background: #1abc9c; border-radius: 30px 30px; width: 94%;  margin: 30px; font-family: 'Trirong', serif;"> Dados do Cliente</h3>

        <div class="bloco_cliente" style=" border-radius: 30px 30px;  margin: 30px; display: inline-block; ">
          <div style="float: left;position:relative;">
            <img  src="https://img.icons8.com/plasticine/200/000000/user-male-circle.png" />
          </div>
          <div style="float: left;position:relative;" >
            <br>
            <br>
            <br>
            <br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nome do Proprietário:</b> &nbsp; <?php  echo $row['NomeProprietario'];?></p >
            <br>
            <p > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Telefone do Proprietário:</b> &nbsp; <?php  echo $row['TelefoneProprietario'];?></p>
          </div>
        </div>
        
        <h3 style="line-height:50px;text-align: center; color:white; background: #1abc9c; border-radius: 30px 30px; width: 94%;  margin: 30px;"> Dados do Carro</h3>
        
        <div class="bloco_veiculo" style="text-justify: auto; border-radius: 30px 30px; width: 94%;  margin: 30px; ">
          
          <div style="position:relative; ">
            <p>&nbsp;<b>Nº da vaga: </b>&nbsp; <?php  echo $row['NumeroEstacionamento'];?> </p>
                  
            <p>&nbsp;<b>Modelo: </b>&nbsp; <?php  echo $row['Modelo'];?> <p>
              
            <p>&nbsp;<b>Cor: </b>&nbsp; <?php  echo  $row['Cor'];?></p>
                
            <p>&nbsp;<b>Marca:</b> &nbsp; <?php  echo $row['Marca'];?></p>
            
            <p>&nbsp;<b>Placa:</b> &nbsp; <?php  echo $row['Placa'];?></p>
          </div>
          <?php 
          $entrada = $row['Entrada'];
          $saida = date("Y-m-d H:i");
          $permanencia = ((strtotime($saida) - strtotime($entrada))/3600);
          $TarifaEstacionamento=10;
          if($permanencia>1){
           $TarifaEstacionamento = 10 + (($permanencia-1)*($TarifaEstacionamento*0.5));
          }
      
          ?>
          <form action="fecha_conta.php"  method="POST" class="form-horizontal">

          
              <p><b>Entrada:</b> &nbsp; <input  readonly type="datetime-local" name="Entrada" value="<?php   echo $entrada;?>"></p>
              
              <p><b>Saída:</b> &nbsp; <input readonly type="datetime-local" name="Saida" value = "<?php   echo $saida;?>"></p>
            
              <p><b>Permanência:</b> &nbsp; <input readonly name="Permanencia" value ="<?php echo $permanencia;?>"></p>     
              
              <p><b>Convênio:</b> <select name="Convenio"  class="form-control">
              <option value=""></option> 
              <?php                  
               $lojas=mysqli_query($db,"select * from tabela_loja");
               while ($loja=mysqli_fetch_array($lojas)) {?>
                  <option value="<?php echo $loja['Nomeloja'];?>"><?php echo $loja['Nomeloja'];?></option> 
                <?php } ?>             
              </select></p>
              
              <p><b>Tarifa do Estacionamento: </b><input type="text" class="form-control" name="TarifaEstacionamento" value="<?php echo $TarifaEstacionamento;?>" required> </p>
              
              <p><b>Status : </b> <select type= "readonly"name="Status" class="form-control"><option value="Fora">Veiculo Fora</option></select></p>
              
      
              <input type="hidden" value="<?php echo $row['ID'];?>" name="ID">
              
              <p style="text-align: center;"><button class="btn btn-success btn-lg "> <b> Enviar </b> </button></p>
              <br>
              
          </form>
          <?php }?>
       
        </div>
      </div>
      <br>
    </div>
    <br> 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
  </body>
</html>