<?php
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php ?></title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <nav>
                <ul id="Menu">
                    <?php
                        if($is_admin){
                            echo '<li><a href="views/logoff.php">Sair</a></li>';
                        }else{
                            echo '<li><a href="?page=login">Login</a></li>';    
                            
                        }
                    ?>
                    <li><a href="?page=sobre">Sobre</a></li>
                    <li><a href="?page=<?php echo $is_admin ? 'admin/eventos_edit':'eventos'?>">Eventos</a></li>
                    <li><a href="?page=doacao">Doações</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <h1><?php include 'views/'.$page.'.php'; ?></h1>
        </main>
    </body>
</html>