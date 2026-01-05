<?php
define('PROJECT_ROOT', dirname(__DIR__));
require_once PROJECT_ROOT."/Classes/Evento.php";
session_start();
$is_admin = ($_SESSION['admin'] ?? false) === true;
$page = $_GET['page'] ?? 'public/sobre';
define('APP_BOOTSTRAPPED', true);
$allowed_pages = ['public/login', 'public/sobre', 'public/eventos', 'public/doacao', 'admin/eventos_admin', 'admin/eventos_edit', 'admin/eventos_add'];

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