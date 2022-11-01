

<!doctype html>
<html class="no-js" lang="">
  <head>
      
      <title>Estacione Aqui</title>
      <link rel="stylesheet" href="..\CSS\estilo_barra_de_rolagem.css">
      <link rel="stylesheet" href="CSS\estilo_index.css">
      <link rel="icon" href="https://img.icons8.com/plasticine/50/000000/car--v2.png"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="..\CSS\estilo_adicionar_veiculos.css">
    
  </head>

  <body class="section" style="background: #45d6b2; font-family: 'Trirong', serif; ">
        
    <div class="container mt-4"  style=" font-family: 'Trirong', serif; background: rgba(215, 246, 236, 0.87);border-radius: 30px 30px; ">
      <br>

      <?php session_start(); include('menu.php')?>
     
      <div class="login">
        <h1 style=" font-family: 'Trirong', serif;"> <b>Cadastrar Veículo</b> <img src="https://img.icons8.com/color/60/000000/car-badge.png"/></h1>

        <form class="form" method="POST" action="adicionar_veiculo.php">
          &nbsp;
          <img src="https://img.icons8.com/external-prettycons-lineal-color-prettycons/40/000000/external-parking-urban-vol-2-prettycons-lineal-color-prettycons-1.png"/>
            <input style="border-radius: 15px;" type="text" name="NumeroEstacionamento" placeholder="Nº da Vaga" required/>
          &nbsp;
          <img src="https://img.icons8.com/color/40/000000/car--v2.png"/>
          <input style="border-radius: 15px" type="text" name="Modelo" placeholder="Modelo" required/>
          
          &nbsp;
          <img src="https://img.icons8.com/fluency/40/000000/color-palette.png"/>
          <input style="border-radius: 15px" type="text" name="Cor" placeholder="Cor" required/>
          
          <br>&nbsp;
          <img src="https://img.icons8.com/color/40/000000/fiat.png"/>
          <input style="border-radius: 15px" type="text" name="Marca" placeholder="Marca" required/>
          
          &nbsp;
          <img style=" height: 40px" src="..\img\placa-de-carro.png"/>
          <input style="border-radius: 15px" type="text" name="Placa" placeholder="Placa" required/>
          
          &nbsp;
          <img src="https://img.icons8.com/fluency/40/000000/landlord.png"/>
          <input style="border-radius: 15px" type="text" name="NomeProprietario" placeholder="Nome do Proprietário" required/>
        
          <br>&nbsp;
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
          width="40" height="40"
          viewBox="0 0 172 172"
          style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M153.79667,137.31333l-3.29667,23.93667h-14.33333l-7.16667,-10.75h-86l-7.16667,10.75h-14.33333l-3.29667,-23.93667c-0.68083,-5.4825 -0.1075,-11.03667 1.72,-16.2325l13.18667,-35.08083l0.03583,-0.07167l7.13083,-19.0275c1.935,-5.55417 7.05917,-9.28083 12.86417,-9.5675h65.07333c6.09167,0 11.5025,3.83417 13.545,9.5675l20.3175,54.18c1.8275,5.19583 2.40083,10.75 1.72,16.2325z" fill="#d84315"></path><path d="M100.33333,82.41667h14.33333v7.16667h-14.33333zM100.33333,96.75h14.33333v7.16667h-14.33333zM100.33333,111.08333h14.33333v7.16667h-14.33333zM78.83333,82.41667h14.33333v7.16667h-14.33333zM78.83333,96.75h14.33333v7.16667h-14.33333zM78.83333,111.08333h14.33333v7.16667h-14.33333zM57.33333,82.41667h14.33333v7.16667h-14.33333zM57.33333,96.75h14.33333v7.16667h-14.33333zM57.33333,111.08333h14.33333v7.16667h-14.33333z" fill="#ff8a65"></path><path d="M103.91667,50.16667h14.33333v10.75h-14.33333zM53.75,50.16667h14.33333v7.16667h-14.33333z" fill="#d84315"></path><path d="M53.14083,57.33333c-5.805,0.28667 -10.92917,4.01333 -12.86417,9.5675l-7.13083,19.0275l9.06583,-4.76583c4.945,-2.58 8.385,-7.4175 9.28083,-12.9l1.75583,-10.92917z" fill="#bf360c"></path><path d="M168.21242,41.48425l-5.07042,-19.57575c-0.94242,-3.827 -3.97033,-6.82625 -7.8475,-7.77942c-9.70008,-2.38292 -19.479,-3.34325 -28.96408,-3.37908c-0.15767,0 -0.31533,0 -0.46942,0c-18.0385,-0.01433 -34.97692,3.28592 -48.18867,6.44642c-20.26733,4.84825 -48.47892,13.36583 -70.42683,32.34675c-3.00283,2.59792 -4.30358,6.63275 -3.36117,10.45975l5.074,20.62208c0.80267,3.268 3.72667,5.32842 6.82983,5.375c0.58767,0.00717 1.18608,-0.05375 1.77375,-0.19708c0.65217,-0.15767 1.29717,-0.41208 1.91708,-0.76683l19.39658,-10.20892c2.95983,-1.55875 5.0095,-4.40033 5.5255,-7.67192l3.48658,-21.9945c11.98267,-5.17075 24.03342,-8.514 33.97717,-10.88975c9.94733,-2.37933 22.2095,-4.85183 35.26358,-5.67242l13.26192,17.25017c1.98158,2.67317 5.12058,4.27492 8.47458,4.3215l22.04108,-0.01075c0.71667,0.03942 1.40825,-0.02867 2.06042,-0.18275c3.15692,-0.74892 5.44308,-3.57617 5.44667,-6.80475c0.00358,-0.55542 -0.06092,-1.12158 -0.20067,-1.68775z" fill="#f4511e"></path><path d="M154.08333,68.08333c-8.55342,0 -13.95708,-5.30333 -14.17925,-5.52908l5.04533,-5.08833c0.03583,0.03583 3.6335,3.45075 9.13392,3.45075c5.50042,0 9.09808,-3.41492 9.13392,-3.45075l5.04533,5.08833c-0.22217,0.22575 -5.62583,5.52908 -14.17925,5.52908zM16.21458,31.82358l-5.5685,-4.515c0.43358,-0.52675 10.69267,-12.97525 28.77058,-12.97525v7.16667c-14.55908,0 -22.8545,9.90433 -23.20208,10.32358z" fill="#ff8a65"></path></g></g></svg>
          <input style="border-radius: 15px" type="text" name="TelefoneProprietario" placeholder="Telefone do Proprietário" required/>
            
          <p class="submit"><input style="border-radius: 10px" type="submit" name="sent" value="Adicionar"></p>


        </form>
    
      </div> 
      
      <br>
    </div>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>