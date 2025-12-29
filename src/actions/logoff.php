<?php
require_once '../includes/config.php';
if (empty($_SESSION['admin'])) {
    http_response_code(403);
    exit;   
}
if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
    header("Location: /index.php");
    exit;
}