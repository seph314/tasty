<?php

namespace Integration;

use Model\User;
use Model\Comment;

class UserManager {


    //Logic used to connect to database
    private function connectToDataBase() {
        define('DB_SERVER', 'localhost:3306');
        define('DB_USERNAME', 'admin');
        define('DB_PASSWORD', 'password');
        define('DB_DATABASE', 'tasty');
        // return
        return mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    }

    /**
     * UserManager constructor.
     * Connects to database
     */
    public function __construct() {
        $this->connectToDataBase();
    }


    /*
    * THIS SECTION HANDLES USERS
    * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

    /**
     * Creates new user
     * Stores in MySQL database tasty
     * @param User $user
     */

    public function newUser(User $user) {
        // initiate database connection
        $db = self::connectToDataBase();

        // get username and password from the user object
        $username = $user->getUsername();
        $password = $user->getPassword();

        // prepare statment and bind parameters
        $sql = $db->prepare("INSERT INTO member (username, password) VALUES (?, ?)");
        $sql->bind_param("ss", $username, $password);

        // returns true if executed correctly
        if ($sql->execute()) {
            $_SESSION['login_user'] = $username;
            return TRUE;
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
        $db->close();
    }

    /**
     * User login
     * @param User $user
     */

    public function loginUser(User $user) {

        // initiate database connection
        $db = self::connectToDataBase();

        // get username and password from the user object
        $username = $user->getUsername();
        $password = $user->getPassword();

        // prepare statment and bind parameters
        $sql = $db->prepare("SELECT password FROM member WHERE username =?");
        $sql->bind_param("s", $username);

        $sql->execute();
        $sql->store_result();
        $sql->bind_result($encrypted_password);
        $sql->fetch();

        // login if encrypted password matches user input
        if (password_verify($password, $encrypted_password)) {
            return TRUE;
        }


        }






    /**
     * User logout
     * Den här delen ligger här för att jag vill ha samma mönster i koden
     * Tänketa att det eventuellt kan bli aktuellt med databasanrop längre fram i tiden
     */
    public function logOutUser() {

        //check if login_user is set first, then logout
        if (isset($_SESSION['login_user'])) {
            if (session_destroy()) {
                return TRUE;
            }
        }
    }


    /*
     * THIS SECTION HANDLES COMMENTS
     * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    /**
     * Post a comment
     * @param Comment $comment
     */

    public function postComment(Comment $comment) {
        // initiate database connection
        $db = self::connectToDataBase();

        // gather information
        $name = $comment->getName();
        $text = $comment->getComment();
        $dish = $comment->getDish();
        $time = $comment->getTime();

        // prepare statement and bind parameters
        $sql = $db->prepare("INSERT INTO comment (name, comment, dish, post_time)
        VALUES ( ?, ?, ?, ?)");
        $sql->bind_param("ssss", $name, $text, $dish, $time);

        // return
        return $sql->execute();

    }


    /**
     * @param $dish
     * @return bool|\mysqli_result
     */
    public function readComment($dish) {
        $db = self::connectToDataBase();
        $sql = $db->prepare("select * from comment where dish = ?");
        $sql->bind_param("s", $dish);
        $sql->execute();

        return $sql->get_result();

    }


    /**
     * @param Comment $comment
     * @return bool|\mysqli_result
     */
    public function deleteComment(Comment $comment){
        $db = self::connectToDataBase();
        $id = $comment->getId();
        $user = $comment->getName();

        $sql = $db->prepare("DELETE FROM comment WHERE id = ? AND name = ?");
        $sql->bind_param("is", $id, $user);

        return $sql->execute();

    }
}