<?php
require_once("../includes/config.php");
if (empty($_SESSION['admin'])) {
    http_response_code(403);
    exit;
}

$evento_add = [
    'data' => $data = date('d/m/Y', strtotime($_POST["data"])),
    'titulo' => $_POST['titulo'],
    'descricao' => $_POST['descricao'],
];

$Eventos = new Evento(PROJECT_ROOT."/data/eventos.json");
$Eventos->add($evento_add);
header("Location: /index.php?page=admin/eventos_admin");
?>