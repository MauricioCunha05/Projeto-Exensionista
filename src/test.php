<?php
require_once __DIR__."/includes/config.php";



$evento = [
    "data"=> date('0-10'),
    "titulo"=> "Dia das Mães",
    "descricao"=> "sla man se fude 3"
];  

$Eventos = new Evento("data/eventos.json");
$Eventos->edit(1,$evento);

echo '<pre>'; print_r($Eventos->all()); echo '</pre>';
