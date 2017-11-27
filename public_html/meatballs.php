<?php

namespace App\Util;

use Util\Config;

require_once '../classes/App/Util/Config.php';
Config::initRequest();

// checks if you are signed in or not and displays appropriate information
if (isset($_SESSION['login_user'])) {
    require_once("../resources/templates/header_signedin.php");
} else {
    require_once("../resources/templates/header.php");
}

// loads recipe
$_SESSION['dish'] = basename(__FILE__, '.php');
require_once("../resources/templates/recept.php");


// loads comments
require_once("../resources/templates/comment.php");

// loads footer
require_once("../resources/templates/footer.php");

?>




