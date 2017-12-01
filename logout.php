<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;

require_once 'classes/App/Util/Config.php';
Config::initRequest();

// create controller instance and create a new user through the controller
$controller = SessionManager::getController();
$boolean = $controller->logOutUser();

// checks if session is destroyed
if ($boolean === TRUE){
    header("Location: ../tasty/public_html/index.php");
}

SessionManager::storeController($controller);

?>

