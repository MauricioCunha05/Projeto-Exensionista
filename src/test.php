<?php
require "Classes/Evento.php";

$array = [
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

$evento = [
    "data"=> date('05-10'),
    "titulo"=> "Dia das Mães",
    "descricao"=> "sla man se fude"
];

$Eventos = new Evento("data/eventos.json");
echo '<pre>'; print_r($Eventos->all()['eventos']['1']); echo '</pre>';


$Eventos->add($evento);

//echo '<pre>'; print_r($Eventos->all()); echo '</pre>';
