<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;

require_once 'classes/App/Util/Config.php';
Config::initRequest();

// $id = $_POST['id'];
$mydish = $_SESSION['dish'];
$username = $_SESSION['login_user'];

/*$controller = SessionManager::getController();
$controller->deleteComment($username, $mydish, $id);*/

/*
if($controller->deleteComment($username, $mydish, $id)){
header("location: $mydish.php");
}
*/



$controller = SessionManager::getController();
$successful = $controller->deleteComment(new Comment("", $username, "", $mydish, ""));

if (!$successful === TRUE) {
    echo "Delete comment failed";
}

SessionManager::storeController($controller);

?>

