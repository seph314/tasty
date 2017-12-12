<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;
use Model\Comment;

require_once 'classes/App/Util/Config.php';
Config::initRequest();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // echo "HHHHHHÄÄÄÄÄÄÄÄÄÄÄÄÄRRRRRRR:" . $_POST['comment'];
    // store information
    $comment = $_POST['commentText'];
    $id = "";
    $name = $_SESSION['login_user'];
    $dish = $_SESSION['dish'];
    $time = date('Y-m-d H:i:s');

    // controller instance
    $controller = SessionManager::getController();
    $controller->postComment(new Comment($id, $name, $comment, $dish, $time));
    SessionManager::storeController($controller);
// }
?>






