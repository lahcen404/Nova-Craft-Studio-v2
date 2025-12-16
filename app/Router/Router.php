<?php 


    // $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $req_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // get full path 

    $path = trim($req_uri,'/'); // remove '/'

    $page = empty($path) ? 'home' : $path;



    $routes = [
        'home' => 'Home - NovaCraft Studio',
        'about' => 'About - NovaCraft Studio',
        'services' => 'Services - NovaCraft Studio',
        'contact' => 'Contact - NovaCraft Studio',
    ]   ;

    $page_path = ROOT_PATH . '/pages/' . $page . '.php';

    if(array_key_exists($page,$routes) && file_exists($page_path)){

        $title = $routes[$page];
        $content_file = $page_path;
    }else{

        $page ='404';
        $title = '404 - Page Noot Found !!!';
        $content_file = ROOT_PATH . '/pages/404.php';
    }

    require_once ROOT_PATH . '/templates/layout.php';

    
?>