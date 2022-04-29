<?php

function erro (){
    return json_encode([
        "sucesso"=>false,
        "erro"=>[
            "codigo"=>"500",
            "mensagem"=>"Bilhete de identidade invalido"
        ],
        "dados"=>null
    ]);
}

function consultar_bi(string $bi){
    //verifica se esta vazio
    if (empty($bi))
        return erro();

    //Url da api
    $url = "https://angolaapi.tech/api/v1/consultar/bi/$bi";
    //Inicia configurações da solicitação
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //Executa solicitação
    $response = curl_exec($ch);

    //Se não executar mostre o erro
    if ($response == false){
        return json_encode([
            "sucesso"=>false,
            "erro"=>[
                "codigo"=>"500",
                "mensagem"=>"Não foi possivel conectar, verifique sua conexão"
            ],
            "dados"=>null
        ]);
    }
    
    //Fecha requisição
    curl_close($ch);
    //Devolve a resposta da api
    return $response;
}


$bi = $_GET['bi'];
echo consultar_bi($bi);

