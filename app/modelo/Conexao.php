<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$db = 'autoeleja';

$conexao  = @mysqli_connect ($host, $user, $password, $db);
if(!$conexao){
	echo "Erro ao conectar a base de dados";
}