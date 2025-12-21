<?php 

require_once __DIR__ . '/../Database/DBConnection.php';
    // $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $protected_routes = ['logout','admin','profile'];
    $guest_routes = ['login','register'];
    $admin_routes = ['admin'];



    $req_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // get full path 

    $base_path = '/Nova-Craft-Studio-v2/public/';
    $path = str_replace($base_path, '' , $req_uri);
    $path = trim($path,'/'); // remove '/'

    $page = empty($path) ? 'home' : strtolower($path);

// check protected routes
    if(in_array($page,$protected_routes) && !isset($_SESSION['user_id'])){
        header("Location: /login");
        $_SESSION['flash_msg'] = "You Should Login !!";
        $_SESSION['flash_type'] = "error";

        exit;
    }

    // check guest routes

    if(in_array($page,$guest_routes) && isset($_SESSION['user_id'])){
        header("Location: /home");
        exit;
    }

    // check if admin to redirect (/admin)
    if(in_array($page,$admin_routes) && $_SESSION['role'] != 'admin'){

        $_SESSION['flash_msg'] = "You're not an Admin to visit this page !! !!";
        $_SESSION['flash_type'] = "error";

        header("Location: /home");
        exit;
    }



    $routes = [
        'home' => 'Home - NovaCraft Studio',
        'about' => 'About - NovaCraft Studio',
        'services' => 'Services - NovaCraft Studio',
        'contact' => 'Contact - NovaCraft Studio',
        'register' => 'Register - NovaCraft Studio',
        'login' => 'Login - NovaCraft Studio',
        'logout' => 'logout',
        'profile' => 'Profile',
        'admin' => 'Admin Panel'
    ]   ;

$base_view_path = __DIR__ . '/../../views/pages/';

        if($page === 'contact'){
            require_once __DIR__ . '/../Controllers/ContactController.php';
        }

        if($page === 'register'){
            require_once __DIR__ . '/../Controllers/RegisterController.php';
        }

        if($page === 'login'){
            require_once __DIR__ . '/../Controllers/LoginController.php';
        }

        if($page === 'logout'){
            require_once __DIR__ . '/../Controllers/LogoutController.php';
            exit;
        }

        if($page === 'profile'){
            require_once __DIR__ . '/../Controllers/ProfileController.php';
        }

        if($page === 'admin'){
            require_once __DIR__ . '/../Controllers/AdminController.php';
        }

    if(array_key_exists($page,$routes) && file_exists($base_view_path . $page . '.php')){

        $title = $routes[$page];
        $content_file = $base_view_path . $page . '.php';
    }else{

        $page ='404';
        $title = '404 - Page Noot Found !!!';
        $content_file =  $base_view_path . '404.php';
    }

    require_once __DIR__ . '/../../views/templates/layout.php';

    
?>