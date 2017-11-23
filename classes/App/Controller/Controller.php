<?php

namespace Controller;

use Integration\UserManager;
use Model\User;

/**
 * Class Controller
 * @package controller
 * This application controller handles all calls from view to lower layers.
 */
class Controller {

    private $user;

    /**
     * New UserManager instance.
     */
    public function __construct() {
        $this->user = new UserManager();
    }

    /**
     * @param User $user us the new user
     * Adds new user
     */
    public function newUser(User $user){
        //calls newUser in UserManger with $user as parameter
        $this->user->newUser($user);
    }




}