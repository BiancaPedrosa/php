<?php
@ $db = mysqli_connect('localhost','root','ifsp','estacionamento'); 
mysqli_set_charset($db,"utf8");
            if (!$db)
            {
                die('não encontrei o servidor');
            }

?>
