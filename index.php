<?php 
    require_once 'views/layouts/header.php'; 
    require_once 'views/layouts/navbar.php'; ?>
    <main class=container-fluid>
        <div class="rounded">
    <?
    // var_dump($_GET);
    if (empty($_GET['page'])) {
        // var_dump($_GET);
        $page = 'home';
        require_once 'views/pages/' . $page . '/index.php';
    }elseif ($_GET['page']=='error') {
        require_once 'views/pages/error.php';   
    } 
    else {
        $page = $_GET['page'];
        $var = $_GET['var'];
        require_once 'controllers/' . $page.'.php' ;
        // require_once 'views/layouts/footer.php';
        // require_once 'views/layouts/footer_bar.php';
    }   ?>
    </div>
    </main>
    <?php require_once 'views/layouts/footer.php'; ?>
    <?php require_once 'views/layouts/footer_bar.php'; ?>