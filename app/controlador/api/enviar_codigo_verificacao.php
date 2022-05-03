<?php
$telefone = $_REQUEST["telefone"];
require_once "mensagem.php";
require_once "../../modelo/conexao.php";
$resultado = mysqli_query($conexao, "SELECT * FROM pessoa where telefone = $telefone and verificado = 1");
if (mysqli_num_rows($resultado) == 0) {
    echo json_encode([
        "sucesso"=>false,
        "erro"=>[
            "codigo"=>"500",
            "mensagem"=>"Telefone não cadastrado ou não verificado"
        ],
        "dados"=>null
    ]);
    return;
}
$codigo = random_int(100, 999).random_int(100,999);
mysqli_query($conexao, "UPDATE pessoa SET codigo='$codigo' WHERE  telefone=$telefone");
echo enviar_mensagem($telefone, "Seu código de verificação é: ".$codigo);
