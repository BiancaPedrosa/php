<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'information_schema';
  $db_port = 8889;

  //metodo pdo = php data object
  $conexao = new mysqli(
      $db_host,
      $db_user,
      $db_password,
      $db_db
  );
	
  if ($conexao->connect_error) {
    echo 'Errno: '.$conexao->connect_errno;
    echo '<br>';
    echo 'Error: '.$conexao->connect_error;
    exit();
  }

  echo 'Successo na conexao ao MySQL';
  echo '<br>';
  echo 'Host info: '.$conexao->host_info;
  echo '<br>';
  echo 'Protocol version: '.$conexao->protocol_version;

$conexao->close();
?>