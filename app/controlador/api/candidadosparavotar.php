
<?php


$municipio = $_REQUEST['municipio'];
$provincia = $_REQUEST['provincia'];
if (empty($municipio) || empty($provincia)) {
    echo json_encode([
        "sucesso"=>false,
        "erro"=>[
            "codigo"=>"500",
            "mensagem"=>"Faltam dados"
        ],
        "dados"=>null
    ]);
    exit;
}
buscar_candidatos($municipio, $provincia);

function buscar_candidatos($municipio, $provincia): int
{
    require_once "../../modelo/Conexao.php";
    $resultado = mysqli_query($conexao, "SELECT * FROM processo where provincia = '$provincia' and municipio = '$municipio' ");

    if (mysqli_num_rows($resultado) == 0) {
        echo json_encode([
            "sucesso"=>false,
            "erro"=>[
                "codigo"=>"500",
                "mensagem"=>"Não há processos cadastrados para esta provincia e municipio"
            ],
            "dados"=>null
        ]);

    }

    while($processo = mysqli_fetch_array($resultado)):
        $hoje = date('Y-m-d');
        $hoje=date('Y-m-d', strtotime($hoje));
        $de = date('Y-m-d', strtotime($processo["inicio"]));
        $ate = date('Y-m-d', strtotime($processo["fim"]));

        if (($hoje >= $de) && ($hoje <= $ate)){
            $processo_id = $processo["id"];
            $candidados_no_processo = mysqli_query($conexao, "SELECT * FROM candidato_no_processo where processo_id = $processo_id ");
            $candidatos = [];
            while($candidato_no_processo = mysqli_fetch_array($candidados_no_processo)):
                $candidato_id = $candidato_no_processo["candidato_id"];
                $candidato = mysqli_fetch_array(mysqli_query($conexao, "SELECT * FROM pessoa where id = $candidato_id "));
                $candidatos[] = [
                    "id"=>$candidato_no_processo["id"]  ,
                    "nome"=>$candidato["nome"],
                    "foto"=>$candidato["foto"],
                    "proposta"=>$candidato_no_processo["proposta"]
                ];
            endwhile;
            echo json_encode([
                "sucesso"=>true,
                "erro"=>null,
                "dados"=>[
                    "id"=>$processo["id"],
                    "nome"=>$processo["nome"],
                    "provincia"=>$processo["provincia"],
                    "municipio"=>$processo["municipio"],
                    "inicio"=>$processo["inicio"],
                    "fim"=>$processo["fim"],
                    "candidatos"=>$candidatos
                ]
            ]);
            return 0;
        }else{
            //Já passou o prazo
            continue;
        }

    endwhile;

    return 0;
}



