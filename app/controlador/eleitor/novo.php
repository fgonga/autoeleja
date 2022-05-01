<?php
require_once "../../modelo/Conexao.php";
require_once "../../controlador/api/mensagem.php";
$codigo = null;
$telefone = $_REQUEST['telefone'];

if (!empty($telefone) and strlen($telefone) != 9){
    header('location: /app/visao/admin/eleitores/novo.php?erro=sim&mensagem=Telefone incorrecto');
}else{
    $codigo = random_int(100, 999).random_int(100,999);
}

$nome = $_REQUEST['nome'];
$bi = $_REQUEST['bi'];
$genero = $_REQUEST['genero'];
$estado_civil = $_REQUEST['estado_civil'];
$nascimento = $_REQUEST['nascimento'];
$provincia = $_REQUEST['provincia'];
$municipio = $_REQUEST['municipio'];
$residencia = $_REQUEST['residencia'];
$pai = $_REQUEST['pai'];
$mae = $_REQUEST['mae'];



$query = "INSERT INTO pessoa (telefone,codigo,verificado,tipo,nome, bi, genero, estado_civil, nascimento, provincia, municipio, residencia, pai, mae) VALUES ('$telefone','$codigo',0,'e','$nome', '$bi', '$genero', '$estado_civil', '$nascimento', '$provincia', '$municipio', '$residencia', '$pai', '$mae')";

if (mysqli_query($conexao,$query)) {
    mysqli_close($conexao);
    if (!empty($telefone)){
        enviar_mensagem($telefone,"Codido de verificação: ".$codigo);
        header("location: /app/visao/admin/eleitores/verificacao.php?telefone=$telefone");
        return 0;
    }
    header('location: /app/visao/admin/eleitores/novo.php?erro=nao&mensagem=Eleitor cadastrado com sucesso');
} else{
    mysqli_close($conexao);
    header('location: /app/visao/admin/eleitores/novo.php?erro=sim&mensagem=Não foi possível cadastrar');
};





