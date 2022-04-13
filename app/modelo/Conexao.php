<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$db = 'autaeleja';

$conexao  = @mysqli_connect ($host, $user, $password, $db);
if (mysqli_connect_error()) {
	die(mysqli_connect_error());
}
