<?php 
    require_once 'views/layouts/header.php'; 
    require_once 'views/layouts/navbar.php'; ?>
    <main class=container-fluid>
        <div class="rounded">
    <?php
    if (!empty($_GET['page']) && is_file('controllers/' . $_GET['page'] . '.php')) {
        // var_dump($_GET);
        require_once 'controllers/' . $_GET['page'] . '.php';
    }else    {
        $page = 'accueil';
        $var = 'index';
        require_once 'controllers/' . $page.'.php' ;
        // require_once 'views/layouts/footer.php';
        // require_once 'views/layouts/footer_bar.php';
    }   ?>
    </div>
    </main>
    <?php require_once 'views/layouts/footer.php'; ?>
    <?php require_once 'views/layouts/footer_bar.php'; ?>