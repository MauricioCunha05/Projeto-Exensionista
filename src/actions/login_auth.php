<?php
require_once('../includes/config.php');
if(!password_verify($_POST['pass'], getenv('ADMIN_PASSWORD_HASH'))) {
    unset($_SESSION['admin']);
    header("Location: /index.php");
    exit;
}else{
    $_SESSION['admin'] = true;
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
    session_regenerate_id(true);
    header("Location: /index.php?page=admin/eventos_admin");
    exit;
}