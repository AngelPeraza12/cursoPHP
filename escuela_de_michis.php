<?php

$michis = [];
$michis_silvina = [
    "nombre" => "Silvina",
    "ocupacion" => "celadora",
    "color" => "naranja",
    "comidas" => array(
        "favoritas" => "Atun",
        "No_Favoritas" => "fresa"
    )
     
];

$michis_luna = [
    "nombre" => "Luna",
    "ocupacion" => "dormidora",
    "color" => "negra con blanco",
    "comidas" => array(
        "favoritas" => "pescado",
        "No_Favoritas" => "mango"
    )
];

$michis_dior = [
    "nombre" => "Dior",
    "ocupacion" => "Futbolista",
    "color" => "negro",
    "comidas" => array(
        "favoritas" => "pollo",
        "No_Favoritas" => "ahuyama"
    )
       
];

array_push($michis, $michis_silvina, $michis_luna, $michis_dior);

echo "las comidas favoritas de " . $michis_silvina["nombre"] . " es: " . $michis_silvina["comidas"]["favoritas"];
