<?php 

session_start();

require_once './Controllers/MainController.php';
require_once './Models/Model.php';

$path = parse_url( $_SERVER['REQUEST_URI'])['path'];

switch($path) {

    case '/':
        MainController::home();
        break;

    case '/login':
        MainController::login();
        break;
        
    case '/login_back':
        MainController::loginStore();
        break;
    
    case '/register':
        MainController::register();
        break;
                        
    case '/register_back':
        MainController::registerStore();
        break;
        
    case '/classes':
        MainController::classes();
        break;                            
                
    case '/logout':
        MainController::logout();
        break;
    case '/create_class':
        MainController::create();
        break; 
    case '/create_back' :
        MainController::createstore();
        break; 
    case '/delete_class':
        MainController::delete();
        break;  
    case '/update_class':
        MainController::updateclass();
        break; 
    case '/update_back':
        MainController::updatestore();                       
    default:
        include_once './Views/404.php';
        break;
        
}