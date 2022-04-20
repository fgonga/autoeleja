<?php

function enviarmensagem(string $numero, string $mensagem)
{
    $url = "https://angolaapi.tech/api/v1/mensagem/enviar";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt(
        $ch,
        CURLOPT_POSTFIELDS,
        "numero=$numero&mensagem=$mensagem"
    );
    return json_decode(curl_exec($ch), true);
}



$numero = $_REQUEST['numero'];
$mensagem = $_REQUEST['mensagem'];
if (!empty($numero) and !empty($mensagem)) {
    return enviarmensagem($numero, $mensagem);
}
