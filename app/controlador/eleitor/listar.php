<?php
require_once "../../../modelo/Conexao.php";
$eleitores = mysqli_query($conexao, "SELECT * FROM pessoa WHERE pessoa.tipo = 'e'");


