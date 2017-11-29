<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;
use Model\Comment;

// require_once 'classes/App/Util/Config.php';
// Config::initRequest();



// listen for post request
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // store information
    $id = "";
    $name = $_SESSION['login_user'];
    $comm = $_POST['comment'];
    $dish = basename($_SERVER['REQUEST_URI'], ".php"); /* $dish = $_SESSION['dish'] */
    $time = date('Y-m-d H:i:s');

    // den här delen funkar nu, dish innehåller rätt ord
    // echo $comm . " = echo";
    // echo __DIR__;

    // create controller instance and create a new user through the controller
    $controller = SessionManager::getController();
    $controller->postComment(new Comment($id, $name, $comm, $dish, $time));
    SessionManager::storeController($controller);
}

?>







<?php
/*
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $mycomment = mysqli_real_escape_string($db,$_POST['comment']);
    $name=$_POST['comment'];
    $mydish = $_SESSION['dish'];
    $time = date('Y-m-d H:i:s');
    $sql = "INSERT INTO comment ( name, comment, dish, post_time )
    VALUES ( '$login_session', '$mycomment', '$mydish', '$time')";

    if ($db->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}
*/
?>