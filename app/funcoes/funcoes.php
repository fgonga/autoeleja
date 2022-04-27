<?php


/**
 * @param array $array
 * @param string $element
 * @return array
 */
function ordernar(array $array, string $element ): array
{
    $new_array =[];
    $stey = null;
    $maior = 0;
    $maior_i = 0;
    $array=[0,25,50,100,24,2432,100];

    foreach ($array as $key => $item){
        foreach ($array as $key => $item){
            if ($item > $maior){
                $maior = $item;
                $maior_i = $key;
            }
        }

        $new_array[] = $maior;
//        if ($item["votos"] > $maior){
//            $new_array[$key]= $item;
//            $maior = $item["votos"];
//        }else{
//            $stey = $new_array[$key-1];
//            $new_array[$key-1] = $item;
//            $new_array[$key] = $stey;
//        }

    }

    echo json_encode("$maior");
    return [];
}
