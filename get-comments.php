<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;

require_once 'classes/App/Util/Config.php';
Config::initRequest();


$dish = $_SESSION['dish'];
$controller = SessionManager::getController();
$select = $controller->readComment($dish);

$encode = array();
while($row = mysqli_fetch_assoc($select)) {
    $encode[] = $row;
}

echo \json_encode($encode);

