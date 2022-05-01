<?php
require_once "../../../modelo/Conexao.php";
$candidatos = mysqli_query($conexao, "SELECT * FROM pessoa WHERE pessoa.tipo = 'c'");
 mysqli_close($conexao);

