<?php
require_once "Controller/MousesController.php";
require_once "Controller/LoginController.php";
require_once "Controller/MarcaController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; 
}

$params = explode('/', $action);

$mousesController = new MousesController();
$loginController = new LoginController();
$marcaController = new MarcaController();



switch ($params[0]) {
   case 'home': 
        $mousesController->showHome(); 
        break; 

    case 'login': 
        $loginController->login(); 
        break;

    case 'logout': 
        $loginController->logout(); 
        break;

    case 'verify': 
        $loginController->verifyLogin(); 
        break;

    case 'createMouses': 
        $mousesController->createMouses(); 
        break;

    case 'createMarca': 
            $marcaController->createMarca(); 
            break;

    case 'deleteMouses': 
        $mousesController->deleteMouse($params[1]); 
        break;

    case 'deleteMarca': 
        $marcaController->deleteMarca($params[1]); 
        break;    

    case 'updateMouses': 
        $mousesController->updateMouses($params[1], $params[2]); 
        break;

     case 'updateMarca': 
        $marcaController->updateMarca($params[1]); 
        break;

    case 'viewMouses': 
        $mousesController->viewMouse($params[1]); 
        break;
        
    default: 
        echo('404 Page not found'); 
        break;
}


?>