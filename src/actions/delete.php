<?php
require_once("../includes/config.php");
if (empty($_SESSION['admin'])) {
    http_response_code(403);
    exit;
}

$Eventos = new Evento(PROJECT_ROOT."/data/eventos.json");
$Eventos->delete($_POST["id"]);
header("Location: /index.php?page=admin/eventos_view");
?>