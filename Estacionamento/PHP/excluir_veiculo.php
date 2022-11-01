
<?php
    session_start();
    include_once("conexão.php");

    $ID=$_REQUEST['ID'];
    $query = "DELETE FROM tabela_veiculo WHERE ID=$ID"; 
    $result = mysqli_query($db,$query) or die ( mysqli_error($db));

    if($result)
    header("Location: tabela_ver_veiculos_fora.php"); 
?>