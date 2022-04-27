<?php
require_once "../../modelo/Conexao.php";

$nome = $_POST['nome'];
$fim = $_POST['inicio'];
$inicio = $_POST['inicio'];
$provincia = $_POST['provincia'];
$municipio = $_POST['municipio'];
$propostas  = $_REQUEST["proposta"];

$query = "INSERT INTO processo (nome, fim, inicio, provincia, municipio) VALUES ('$nome', '$fim', '$inicio', '$provincia', '$municipio')";

if (mysqli_query($conexao,$query)) {
    $processo_id = mysqli_fetch_array(mysqli_query($conexao,"SELECT LAST_INSERT_ID()"))[0];
    foreach ($_REQUEST["candidato"] as $id => $candidato) {
        $candidato_id = intval($id);
        $proposta = $propostas[$id];
        $query = "INSERT INTO candidato_no_processo (candidato_id, processo_id, proposta) VALUES ('$candidato_id', '$processo_id', '$proposta');";
        mysqli_query($conexao,$query);
    }
    header("location: /app/visao/admin/processos/novo.php?erro=nao&mensagem=Processo $processo_id cadastrado com sucesso");
} else{
    header('location: /app/visao/admin/processos/novo.php?erro=sim&mensagem=Não foi possível cadastrar');
};





