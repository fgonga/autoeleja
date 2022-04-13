<?php
require_once "../../../modelo/Conexao.php";
$candidatos[] = [];
if ($_GET['id']){
    $processo_id = $_GET['id'];
    $processo = mysqli_query($conexao, "SELECT * FROM voto where id = $processo_id");

    $candidados_no_processo = mysqli_query($conexao, "SELECT * FROM candidato_no_processo where processo_id = $processo_id");

   var_dump($);
    while($candidato_no_processo = mysqli_fetch_array($candidados_no_processo)):
        $candidato_id = $candidato_no_processo["candidato_id"];
        $candidato_no_processo_id = $candidato_no_processo["id"];
        $candidato = mysqli_fetch_array(mysqli_query($conexao, "SELECT * FROM pessoa where id = $candidato_id limit 1"));
        $votos = mysqli_num_rows(mysqli_query($conexao, "SELECT * FROM voto WHERE processo_id = $processo_id AND candidato_no_processo_id = $candidato_no_processo_id"));

        $candidatos[] = [
            "candidato"=>$candidato["nome"],
            "votos"=>$votos,
            "proposta"=> $candidato_no_processo["proposta"]
        ];
    endwhile;
    var_dump($candidatos);
    exit();
}


