<?php
/**
 * Koden i SessionManager kommer direkt från SessionManager-koden i chat-nojs-mvc-php
 */

namespace Controller;

/**
 * Stores and retrieves session data.
 */
class SessionManager {

    /**
     * The key for the controller object is the session storage.
     */
    const CONTROLLER_KEY = 'controller';

    /**
     * If there is a controller object in the current session, it is returned. If there is not,
     * a new controller is instantiated and returned.
     *
     * @return Controller the controller.
     */
    public static function getController() {
        if (isset($_SESSION[self::CONTROLLER_KEY])) {
            return unserialize($_SESSION[self::CONTROLLER_KEY]);
        } else {
            return new Controller();
        }
    }

    /**
     * The specified controller instance is stored in the current session.
     * @param \Controller\Controller $controller
     */
    public static function storeController(Controller $controller) {
        $_SESSION[self::CONTROLLER_KEY] = serialize($controller);
    }

}
