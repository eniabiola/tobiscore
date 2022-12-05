<?php
    
    require_once __DIR__.'/../vendor/autoload.php';

    use app\controllers\SiteController;
    use app\controllers\AuthController;

    use app\core\Application;

    $app = new Application(dirname(__DIR__));
        
    $app->router->get('/', [new SiteController(), 'home']);
    $app->router->get('/contact', [new SiteController(), 'contact']);
    $app->router->post('/contact', [new SiteController(), 'handleContact']);

    $app->router->get('/login', [new AuthController(), 'login']);
    $app->router->post('/login', [AuthController::class, 'login']);
    $app->router->get('/register', [AuthController::class, 'register']);
    $app->router->post('/register', [AuthController::class, 'register']);

    // $app->router->get('/php_info', [new SiteController(), 'phpInfo']);

    $app->run();
    
?>