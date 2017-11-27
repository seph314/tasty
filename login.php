<?php

namespace App;


use Controller\SessionManager;
use Util\Config;
use Model\User;

// this part has to be done here for login to work
require_once 'classes/App/Util/Config.php';
Config::initRequest();



// listen for post request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // store username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // create controller instance and create a new user through the controller
    $controller = SessionManager::getController();
    $controller->loginUser(new User($username, $password));
    SessionManager::storeController($controller);
}
?>


<?php
/*
 * Seminar 2 code here:
 * * * * * * * * * * * * * * *
include("connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id FROM member WHERE username = '$myusername' and password = '$mypassword'";

    $result = mysqli_query($db,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count == 1) {
        $_SESSION['login_user'] = $myusername;
        header("location: ../public_html/index.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
*/
?>



