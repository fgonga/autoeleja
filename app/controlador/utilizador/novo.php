<?php
require_once "../../modelo/Conexao.php";
$erro = "nao";
$mensagem = "Successo";
$nome = $_REQUEST['nome'];
$senha = $_REQUEST['senha'];
$tipo = $_REQUEST['tipo'];


$query = "INSERT INTO utilizador (nome, senha, tipo) VALUES ('$nome', '$senha', '$tipo')";

if (!mysqli_query($conexao,$query)) {
    $erro ="sim";
    $mensagem = "Erro";
}
 header("location: /app/visao/admin/utilizador/unico.php?erro=$erro&mensagem=$mensagem");



