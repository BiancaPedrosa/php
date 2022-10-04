<?php
$conexao = new mysqli('localhost', 'root', 'ifsp', 'cafe');
if ($conexao->connect_error) die ($conexao->connect_error);
