<?php
require_once "../../modelo/Conexao.php";
$telefone = $_REQUEST["telefone"];
$codigo = $_REQUEST["codigo"];
$processo_id = $_REQUEST["processo_id"];
$candidato_id = $_REQUEST["candidato_id"];
$query = mysqli_query($conexao, "SELECT * FROM pessoa WHERE pessoa.tipo = 'e' and pessoa.telefone='$telefone' and pessoa.codigo='$codigo' and pessoa.verificado = 1 limit 1");
$row = mysqli_fetch_array($query);
$eleitor_id = $row["id"];


$resultado = mysqli_num_rows($query);

if($resultado > 0){
    $hoje = date("Y-m-d");

    $query = mysqli_query($conexao, "SELECT * FROM voto WHERE  voto.processo_id='$processo_id' and voto.eleitor_id='$eleitor_id' limit 1");
    $resultado = mysqli_num_rows($query);
    if ($resultado > 0) {
        echo json_encode([
            "sucesso"=>false,
            "erro"=>[
                "codigo"=>"500",
                "mensagem"=>"Já votou neste processo"
            ],
            "dados"=>null
        ]);
        return ;
    }
    $query = mysqli_query($conexao, "INSERT INTO voto (`candidato_no_processo_id`, `processo_id`, `data`,`eleitor_id`) VALUES ('$candidato_id', '$processo_id', '$hoje',$eleitor_id)");
    echo json_encode([
        "sucesso"=>true,
        "erro"=>null,
        "dados"=>null
    ]);
    return;

}else{
    echo json_encode([
        "sucesso"=>false,
        "erro"=>[
            "codigo"=>"500",
            "mensagem"=>"Codigo de verificação  incorreto ou telefone incorreto"
        ],
        "dados"=>null
    ]);
    return;
}
