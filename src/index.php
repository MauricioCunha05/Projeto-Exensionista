<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<nav>
    <ul id="Menu">
        <li><a href="?page=inicio">Inicio</a></li>
        <li><a href="?page=sobre">Sobre</a></li>
        <li><a href="?page=doacao">Doações</a></li>
    </ul>
</nav>
<body>
    <h1><?php include 'views/'.($_GET["page"]??'inicio').'.php'; ?></h1>
</body>
</html>