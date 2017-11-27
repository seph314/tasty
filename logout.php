<?php

namespace App;

use Controller\SessionManager;
use Util\Config;

// this part has to be done again when destroying the current session when logging out
require_once 'classes/App/Util/Config.php';
Config::initRequest();

// create controller instance and create a new user through the controller
$controller = SessionManager::getController();
$controller->logOutUser();
SessionManager::storeController($controller);

?>




<?php
/*
 * Seminar 2 code:
 * * * * * * * * * * * * *
session_start();

//check if login_user is set first, then logout
if(isset($_SESSION['login_user'])){
    if(session_destroy()) {
        header("Location: ../public_html/index.php");
    }
}
*/
?>