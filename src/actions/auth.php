<?php
require_once('../includes/config.php');
if(!password_verify($_POST['pass'], getenv('ADMIN_PASSWORD_HASH'))) {
    unset($_SESSION['admin']);
    header("Location: /index.php");
    exit;
}else{
    $_SESSION['admin'] = true;
    header("Location: /index.php?page=admin/eventos_admin");
    exit;
}