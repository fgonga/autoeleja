<?php
require_once "../../../modelo/Conexao.php";
$utilizadores = mysqli_query($conexao, "SELECT * FROM utilizador order by id desc ");

