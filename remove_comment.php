<?php

namespace App;

use Controller\SessionManager;
use Model\Comment;
use Util\Config;
use Model\User;

require_once 'classes/App/Util/Config.php';
Config::initRequest();

// store information
$id = $_POST['deleteid'];
$mydish = $_SESSION['dish'];

// create controller instance and create a new user through the controller
$controller = SessionManager::getController();
$successful = $controller->deleteComment(new Comment($id, "", "", $mydish, ""));

if ($successful === "true") {
    header("location: public_html/$mydish.php");
} else {
    echo "Delete comment failed";
}

SessionManager::storeController($controller);

?>









<?php
/*
include("session.php");
$mydish = $_SESSION['dish'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $id = mysqli_real_escape_string($db,$_POST['deleteid']);
    $sql = "DELETE FROM comment WHERE id =  '$id'";
    if ($db->query($sql) === TRUE) {
        header("location: ../../tasty/public_html/$mydish.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    $db->close();
}
*/
?>
