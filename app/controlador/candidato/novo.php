<?php
require_once "../../modelo/Conexao.php";

$nome = $_POST['nome'];
$bi = $_POST['bi'];
$foto = $_POST['foto'];
$genero = $_POST['genero'];
$estado_civil = $_POST['estado_civil'];
$nascimento = $_POST['nascimento'];
$provincia = $_POST['provincia'];
$municipio = $_POST['municipio'];
$telefone = $_POST['telefone'];

//verificar se enviou uma foto

if(!empty($_FILES["foto"]["tmp_name"])){
    $formato = pathinfo($_FILES['foto']["name"], PATHINFO_EXTENSION);
    $nome_do_arquivo = uniqid().".$formato";
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], "../../../publico/candidatos/".$nome_do_arquivo)) {
        $foto = $nome_do_arquivo;
    }else{
        $foto = "padrao.jpg";
    }
}else{
    $foto = "padrao.jpg";
};

$query = "INSERT INTO pessoa (nome, bi, foto, genero, estado_civil, nascimento, provincia, municipio,tipo,telefone) VALUES ('$nome', '$bi', '$foto', '$genero', '$estado_civil', '$nascimento', '$provincia', '$municipio','c','$telefone')";

if (mysqli_query($conexao,$query)) {
    mysqli_close($conexao);
    header('location: /app/visao/admin/candidatos/novo.php?erro=nao&mensagem=Candidato cadastrado com sucesso');
} else{
    mysqli_close($conexao);
    header('location: /app/visao/admin/candidatos/novo.php?erro=sim&mensagem=Não foi possível cadastrar');
};





