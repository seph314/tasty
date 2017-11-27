<?php

namespace Controller;

use Integration\UserManager;
use Model\Comment;
use Model\User;

/**
 * Class Controller
 * @package controller
 * This application controller handles all calls from view to lower layers.
 */
class Controller {

    private $user;
    private $comment;

    /**
     * New UserManager instance.
     */
    public function __construct() {
        $this->user = new UserManager();
        $this->comment = new UserManager();
    }

    /*
    * THIS SECTION HANDLES USERS
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

    /**
     * User create
     * @param User $user is the new user
     */
    public function newUser(User $user){
        // calls newUser in UserManger with $user as parameter.
        $this->user->newUser($user);
    }

    /**
     * User login
     * @param User $user is the user that wants to log in
     */
    public function loginUser(User $user){
        // calls loginUser in UserManager with $user as parameter.
        $this->user->loginUser($user);
    }

    /**
     * User logout
     */
    public function logOutUser(){
        $this->user->logOutUser();
    }

    /*
    * THIS SECTION HANDLES COMMENTS
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

    /**
     * Post comment
     * @param Comment $comment
     */
    public function postComment(Comment $comment){
        $this->comment->postComment($comment);
    }

    /**
     * Read comment
     * @param $dish
     */
    public function readComment($dish){
        return $this->comment->readComment($dish);
    }

    public function deleteComment(Comment $comment){
       return $this->comment->deleteComment($comment);
    }


}