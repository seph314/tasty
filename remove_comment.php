<?php

namespace App\View;

use Controller\SessionManager;
use Model\Comment;
use Util\Config;
use Model\User;

require_once 'classes/App/Util/Config.php';
Config::initRequest();

// store information
$id = $_POST['deleteid'];
$mydish = $_SESSION['dish'];
$userName = $_SESSION['login_user'];

// controller instance
$controller = SessionManager::getController();
$successful = $controller->deleteComment(new Comment($id, $userName, "", $mydish, ""));

if ($successful === TRUE) {
    header("location: public_html/$mydish.php");
} else {
    echo "Delete comment failed";
}

SessionManager::storeController($controller);

?>

