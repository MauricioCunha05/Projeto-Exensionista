<?php
require "Classes/Evento.php";

/* $json = [
    'nextid' => '1',
    'eventos' => [
        '1'=> [
            "data"=> date('05-10'),
            "titulo"=> "Dia das Mães",
            "descricao"=> "sla man se fude"
        ],
        
        '2'=> [
            "data"=> date('d-m'),
            "titulo"=> "Dia dos Pais",
            "descricao"=> "sla cuzão"
        ]
    ]
];

file_put_contents("data/eventos.json", json_encode($json, JSON_UNESCAPED_UNICODE));

$decode = json_decode(file_get_contents("data/eventos.json"), true);

echo '<pre>'; print_r($decode); echo '</pre>';
 */

$json = new Evento("data/evenos.json");
$eventos = $json->all();

echo '<pre>'; print_r($eventos); echo '</pre>';