<?php

namespace App\View;

use Controller\SessionManager;
use Util\Config;
require_once 'classes/App/Util/Config.php';
Config::initRequest();

$controller = SessionManager::getController();
echo \json_encode($controller->getUsername());