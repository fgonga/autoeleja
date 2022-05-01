<?php

function erro (){
    return json_encode([
        "sucesso"=>false,
        "erro"=>[
            "codigo"=>"500",
            "mensagem"=>"Telefone incorrecto"
        ],
        "dados"=>null
    ]);
}

function enviar_mensagem(string $numero,$mensagem){

    if (empty($numero) or strlen($numero) != 9)
        return erro();

    $url = "https://angolaapi.tech/api/v1/mensagem/enviar/$numero/$mensagem/autaeleja";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    if ($response == false){
        return json_encode([
            "sucesso"=>false,
            "erro"=>[
                "codigo"=>"500",
                "mensagem"=>"Não foi possivel enviar sua mensagem, verifique sua conexão"
            ],
            "dados"=>null
        ]);
    }
    return $response;

}

if (!empty($_GET['numero']) and !empty($_GET['mensagem'])){
    echo enviar_mensagem($_GET['numero'],$_GET['mensagem']);
}


