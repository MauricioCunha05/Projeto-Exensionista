<?php
require_once('../config.php');
if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
    header("Location: /index.php");
    exit;
}