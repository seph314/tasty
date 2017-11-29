<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;
use Model\User;

require_once 'classes/App/Util/Config.php';
Config::initRequest();


// listen for post request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // store username and password
    $username = $_POST['new_username'];
    $password = $_POST['new_password'];

    //
    $encrypted_password = password_hash($password, PASSWORD_BCRYPT);

    // create controller instance and create a new user through the controller
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

<?php
/*
 * The code for Seminar 2
 *
 *
include('connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['new_username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['new_password']);

    $sql = "INSERT INTO member (username, password)
    VALUES ('$myusername', '$mypassword')";

    if ($db->query($sql) === TRUE) {
        //set the session to the new user and go to index, which will display the new user as logged in
        $_SESSION['login_user']=$myusername;
        header("location: ../public_html/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    $db->close();

}
*/
?>


