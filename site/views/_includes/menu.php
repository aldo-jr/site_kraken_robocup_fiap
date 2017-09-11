<?php if (!defined('ABSPATH')) exit; ?>

<!-- @TODO Transportar para um service -->
<!-- @TODO Adicionar funcionalidade de reconhecer a página ativa -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo HOME_URI; ?>">KRAKEN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo HOME_URI;?>">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Robocup </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo HOME_URI;?>/robocup/sobre/">O que é</a>
                        <a class="dropdown-item" href="<?php echo HOME_URI;?>/robocup/regulamento/">Regulamento</a>
                    </div>
                </li>

                <!-- @TODO criar página e alterar link-->
                <li class="nav-item">
                    <a class="nav-link" href="#">O Grupo</a>
                </li>

                <!-- @TODO criar página e alterar link-->
                <li class="nav-item">
                    <a class="nav-link" href="#">O Projeto</a>
                </li>

                <!-- @TODO criar página e alterar link-->
                <li class="nav-item">
                    <a class="nav-link" href="#">Galeria</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo HOME_URI;?>/noticias/">Notícias</a>
                </li>

                <!-- @TODO criar página e alterar link-->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo HOME_URI;?>/contato/">Contato</a>
                </li>
            </ul>

            <!-- @TODO criar página e alterar link-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Extras </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Jogo</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>