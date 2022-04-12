<?php
require_once "../../modelo/Conexao.php";
//Utilizadores
$query = mysqli_query($conexao, "SELECT * FROM utilizador");
$tu = mysqli_num_rows($query);
//Candidatos
$query = mysqli_query($conexao, "SELECT * FROM pessoa WHERE pessoa.tipo ='c'");
$tc = mysqli_num_rows($query);
//Eleitores
$query = mysqli_query($conexao, "SELECT * FROM pessoa WHERE pessoa.tipo ='e'");
$te = mysqli_num_rows($query);
//Processos
$query = mysqli_query($conexao, "SELECT * FROM processo");
$tp = mysqli_num_rows($query);
//Votos
$query = mysqli_query($conexao, "SELECT * FROM processo");
$tp = mysqli_num_rows($query);
