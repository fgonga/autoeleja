<?php

require_once "../../modelo/Conexao.php";
$telefone = $_REQUEST["telefone"];
$codigo = $_REQUEST["codigo"];
$query = mysqli_query($conexao, "SELECT * FROM pessoa WHERE pessoa.tipo = 'e' and pessoa.telefone='$telefone' and pessoa.codigo='$codigo' and pessoa.verificado = 0");
$resultado = mysqli_num_rows($query);
if($resultado > 0){
    $dados = mysqli_fetch_array($query);
    $id = $dados["id"];
    $query = mysqli_query($conexao, "UPDATE pessoa SET verificado = 1 WHERE id = $id");
    mysqli_close($conexao);
    header('location: /app/visao/admin/eleitores/verificacao.php?erro=nao&mensagem=Verificado');
}else{
    mysqli_close($conexao);
    header('location: /app/visao/admin/eleitores/verificacao.php?erro=sim&mensagem=Não foi possivel verificar');
}
