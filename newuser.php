<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;
use Model\User;

require_once 'classes/App/Util/Config.php';
Config::initRequest();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // store username and password
    $username = $_POST['new_username'];
    $password = $_POST['new_password'];

    // hash the password
    $encrypted_password = password_hash($password, PASSWORD_BCRYPT);

    // create controller instance and create a new user
    $controller = SessionManager::getController();
    $boolean = $controller->newUser(new User($username, $encrypted_password));
    if ($boolean === TRUE){
        header("location: ../tasty/public_html/index.php");
    }
    else {
        echo "Something went wrong, we couldn't create your new account.";
    }
    SessionManager::storeController($controller);
}
?>




