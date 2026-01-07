<?php
require_once __DIR__."/includes/config.php";
require 'views/public/modals/modal_login.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body id="bootstrap-overrides">
        <header>
            <nav class="navbar border-0">
                <div class="container flex-row justify-content-center">
                    <ul class="navbar-nav flex-row gap-4 fs-5">
                        <li class="nav-item">
                        <?php
                            if ($is_admin) {
                                echo '<a class="nav-link" href="actions/logoff.php">Sair</a>';
                            }else{
                                echo '<a class="nav-link" 
                                            data-bs-toggle="modal"
                                            data-bs-target="#loginModal"
                                            href="#"
                                        >Login</a>';
                            }
                        ?>
                        </li>
                        
                        <li class="nav-item"><a class="nav-link" href="?page=public/sobre">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=<?= $is_admin ? 'admin/eventos_admin':'public/eventos'?>">Eventos</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=public/doacao">Doações</a></li>  
                    </ul>
                </div>
            </nav>
        </header>
        
        <main>
            <?php include 'views/'.$page.'.php'; ?>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>