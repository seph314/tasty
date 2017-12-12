<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;
use Model\User;

require_once 'classes/App/Util/Config.php';
Config::initRequest();




/*if ($_SERVER["REQUEST_METHOD"] == "POST") {*/

    // store username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // create controller instance and create a new user through the controller
    $controller = SessionManager::getController();
    $encrypted_password = $controller->loginUser(new User($username, $password));

    // If result matched $username and $password, table row must be 1 row
    if (password_verify($password, $encrypted_password)) {
        $_SESSION['login_user'] = $username;
        header("location: ../tasty/public_html/index.php");
    }
    else {
        echo "Your Login Name or Password is invalid";
    }

    SessionManager::storeController($controller);
/*}*/
?>

