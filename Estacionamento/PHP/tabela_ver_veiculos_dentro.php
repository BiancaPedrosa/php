<!doctype html>
<html class="no-js" lang="">
    <head>
    
        <title>Estacione Aqui</title>
    
        <link rel="stylesheet" href="..\CSS\estilo_barra_de_rolagem.css">
        <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
        <link rel="icon" href="https://img.icons8.com/plasticine/50/000000/car--v2.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    </head>

    <body  class="section" style="background: #45d6b2; font-family: 'Trirong', serif; ">
       <br>
        <div class="container" style=" font-family: 'Trirong', serif;background: rgba(215, 246, 236, 0.87);border-radius: 30px 30px; ">

            <br>
            <?php 
            session_start();
                include_once('menu.php');
            ?>
            <div class="bloco" style="background: #e2fcec;  border-radius: 30px 30px; width: 94%;  margin: 30px  ;">
                <br>
                <h2 style=" font-family: 'Trirong', serif; line-height:50px;text-align: center; color:white; background: #1abc9c; border-radius: 30px 30px; width: 94%;  margin: 30px;"><b> Veículos no estacionamento</b></h2>
                <br>   
                <div class="table-responsive" style="border-radius: 10px 10px; ">   
                    <table  style="margin: auto; width: 90%; height: 90%;" >
                        <thead style="background-color: #108a71;;color: white;">
                            <tr>
                            <th  style="text-align: center;"  scope="col"><b>#</b></th>
                            <th style="text-align: center;" scope="col"><b>Nº da vaga</b></th>
                            <th style="text-align: center;" scope="col"><b>Nome do Proprietário</th>
                            <th  style="text-align: center;" scope="col"><b>Placa do veículo</b></th>
                            <th  style=" text-align: center;"  width="18%" scope="col"><b>Ação</b></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                include('conexão.php');
                                $ret=mysqli_query($db,"select * from   tabela_veiculo where Status is NULL ORDER BY nomeproprietario ASC");
                                $cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {
                            ?>
                            
                            <tr>
                                <th style="font-weight: bold;  text-align: center;" scope="row" class="table-light"><?php echo $cnt;?></th>
                                <td style="font-weight: bold;  text-align: center;" class="table-light"><?php  echo $row['NumeroEstacionamento'];?></td>
                                <td style="font-weight: bold;  text-align: center;" class="table-light"><?php  echo $row['NomeProprietario'];?></td>
                                <td style="font-weight: bold;  text-align: center;" class="table-light"><?php  echo $row['Placa'];?></td>
                                    
                                <td  style="font-weight: bold;  text-align: center;" class="table-light"><a href="gerenciar_veiculos_dentro.php?ID=<?php echo $row['ID'];?>"><i><img src="https://img.icons8.com/plasticine/50/000000/create-new.png"/></i></a></td>
                            
                            </tr>
                            
                            <?php 
                                $cnt=$cnt+1;
                                }
                            ?>
                        </tbody>
                    </table>
                    <br>
                </div>
                <br>
            </div>
            <br>
                    
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
