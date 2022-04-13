<?php

function consultar_bi(string $bi){
    $url = "https://angolaapi.tech/api/v1/consultar/bi/$bi";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    return json_decode(curl_exec($ch),true);
}
consultar_bi("005898971BA042");
