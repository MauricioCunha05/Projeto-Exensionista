<?php
require_once("../includes/config.php");
if (empty($_SESSION['admin'])) {
    http_response_code(403);
    exit;   
}
$evento_edit = [
    'data' => $data = DateTime::createFromFormat('Y-m-d', $_POST["data"])->format('d/m/Y'),
    'titulo' => $_POST['titulo'],
    'descricao' => $_POST['descricao'],
];
$Eventos = new Evento(PROJECT_ROOT."/data/eventos.json");
$Eventos->edit($_POST["id"], $evento_edit);
header("Location: /index.php?page=admin/eventos_view");
?>