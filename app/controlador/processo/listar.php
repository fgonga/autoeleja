<?php
require_once "../../../modelo/Conexao.php";
$processos = mysqli_query($conexao, "SELECT * FROM processo");


