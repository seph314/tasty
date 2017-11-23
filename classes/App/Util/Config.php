<?php

namespace Util;

final class Config {
    /**
     * Config constructor.
     */
    public function __construct() {
    }

    /**
     * This function should be called first in any PHP page receiving a HTTP request.
     */
    public static function initRequest() {
        spl_autoload_register(function ($class) {
            require_once 'classes/App/' . \str_replace('\\', '/', $class) . '.php';
        });

        session_start();
    }
}

?>