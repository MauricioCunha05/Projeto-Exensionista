<?php
require_once("Classes/Evento.php");
session_start();
$is_admin = ($_SESSION['admin'] ?? false) === true;
$page = $_GET['page'] ?? 'sobre';
define('APP_BOOTSTRAPPED', true);
$allowed_pages = ['login', 'sobre', 'admin/eventos_edit', 'eventos', 'doacao'];

if (!in_array($page, $allowed_pages, true)) {
    header('Location: /index.php');
    exit;
}

if (str_starts_with($page, 'admin/')) {
    if (!$is_admin) {
        header('Location: /index.php');
        exit;
    }
}