<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;
use Model\Comment;

require_once 'classes/App/Util/Config.php';
Config::initRequest();


// listen for post request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // store information
    $id = "";
    $name = $_SESSION['login_user'];
    $comm = $_POST['comment'];
    $dish = basename($_SERVER['REQUEST_URI'], ".php"); /* $dish = $_SESSION['dish'] */
    $time = date('Y-m-d H:i:s');

    // controller instance
    $controller = SessionManager::getController();
    $controller->postComment(new Comment($id, $name, $comm, $dish, $time));
    SessionManager::storeController($controller);
}

?>






