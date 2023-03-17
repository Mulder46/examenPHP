<?php
/*tarde
Sabiendo que la siguiente url https://pokeapi.co/api/v2/pokemon?limit=151,
 devuelve un array con el nombre de los Pokemons y la url que contiene toda la información de cada uno:

1 . Estructura la información que te llega para mostrarla por pantalla como muestra la siguiente imagen:
    */
    $pokemon_json = file_get_contents('https://pokeapi.co/api/v2/pokemon?limit=151');
    $decoded_json = json_decode($pokemon_json, true);
    $results = $decoded_json['results'];
   // var_dump($results);
   $pokeArray=[];
   $url=0;
    for ($i=0; $i < count($results); $i++){
        $pokeArray[$i]=$results[$i]["name"];
        echo $results[$i]["name"];
        echo "<br>";
        $pokeArray[$url]=$results[$i]["name"];
        echo $results[$i]["url"];
        echo "<br>";
    }
    var_dump($pokeArray);

?>