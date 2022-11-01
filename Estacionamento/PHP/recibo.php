 

<!doctype html>
<html  lang="pt-br">
  <head>
      
      <title>Estacione Aqui</title>
      
      <link rel="icon" href="https://img.icons8.com/plasticine/50/000000/car--v2.png"/>

    
  </head>        
             
<?php

include('conexão.php');
$ID=$_GET['vid'];
$ret=mysqli_query($db,"select * from tabela_veiculo where ID='$ID'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
  ?>

<div  id="exampl">

      <table border="1" class="table table-bordered mg-b-0">
        <tr>
          <th colspan="4" style="text-align: center; font-size:22px;"> Recibo do Estacionamento</th>

        </tr>
   
   <tr>
                                <th>N° Vaga</th>
                                   <td><?php  echo $row['NumeroEstacionamento'];?></td>
                                              

                                <th>Modelo</th>
                                   <td><?php  echo $row['Modelo'];?></td>
                                   </tr>
                                   <tr>
                                <th>Cor</th>
                                   <td><?php  echo $row['Cor'];?></td>
                             
                                <th>Marca</th>
                                   <td><?php  echo $row['Marca'];?></td>
                                   </tr>
                                   
                                    <th>Placa</th>
                                      <td><?php  echo $row['Placa'];?></td>
                                      <tr>
                                       <th>Nome do Proprietário</th>
                                        <td><?php  echo $row['NomeProprietario'];?></td>
                                    
                                    <th>Telefone do Proprietário</th>
                                        <td><?php  echo $row['TelefoneProprietario'];?></td>
                                    </tr>

                                    <tr>
                               <th>Entrada</th>
                                <td><?php  echo $row['Entrada'];?></td>
    <th>Status</th>
    <td> <?php  
if($row['Status']=="")
{
  echo "Veiculo Dentro";
}
if($row['Status']=="Fora")
{
  echo "Veiculo Fora";
}

     ;?></td>
  </tr>
<?php if($row['Observacoes']!=""){ ?>
<tr>
<th>Saída</th>
<td><?php  echo $row['Saida'];?></td>
<th>Tarifa Total</th>
<td><?php  echo $row['TarifaEstacionamento'];?></td>
</tr>
<tr>
  <th>Observacões</th>
  <td colspan="3"><?php  echo $row['Observacoes'];?></td>

</tr>


<?php } ?>
  

</table>
            <?php }?>
          </div>
          