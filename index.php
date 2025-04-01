<?php 
if (empty($_GET['page'])) {
    $page = 'home';
    require_once 'views/pages/' . $page . '/index.php';
}elseif ($_GET['page']=='error') {
    require_once 'views/pages/error.php';   
} 
else {
    
    require_once 'views/layouts/header.php';
    require_once 'views/layouts/navbar.php';
    $page = $_GET['page'];
    $var = $_GET['var'];
    require_once 'controllers/' . $page.'.php' ;
    // require_once 'views/layouts/footer.php';
    // require_once 'views/layouts/footer_bar.php';
}   