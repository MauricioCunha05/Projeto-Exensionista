<?php
require("../../Classes/Evento.php");
$Eventos = new Evento("../../data/eventos.json");
$Eventos->delete($_POST["id"]);
header("Location: /views/admin/eventos_edit.php");
?>