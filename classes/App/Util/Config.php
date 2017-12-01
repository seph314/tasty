<?php
/**
 * OBS Den det här upplägget med initRequest kommer direkt från kursexemplet chat-nojs-MVC
 */
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
            require_once '/Users/Anders/Sites/tasty/classes/App/' . \str_replace('\\', '/', $class) . '.php';
        });

        session_start();
    }

    /**
     * Configures pathways and Error reporting
     * Funkar inte just nu
     */
    public static function setup() {
        defined("LIBRARY_PATH")
        or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '../resources/library'));

        defined("TEMPLATES_PATH")
        or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '../resources/templates'));

        ini_set("error_reporting", "true");
        error_reporting(E_ALL /* & ~E_WARNING */);
    }

}

?>