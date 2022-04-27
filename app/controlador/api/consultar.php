<?php

function consultar_bi(string $bi){
    if (empty($bi))
        return erro();

    $url = "https://angolaapi.tech/api/v1/consultar/bi/$bi";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
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
    return json_encode(curl_exec($ch),true);

}

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
$bi = $_GET['bi'];
echo consultar_bi($bi);

