<?php

namespace Integration;

use Model\User;
use Model\Comment;

class UserManager {


    //Logic used to connect to database
    private function connectToDataBase() {
        define('DB_SERVER', 'localhost:3306');
        define('DB_USERNAME', 'root');
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
        // get username and password from the user object
        $username = $user->getUsername();
        $password = $user->getPassword();

        // initiatate databse connection
        $db = self::connectToDataBase();

        $sql = "INSERT INTO member (username, password)
        VALUES ('$username', '$password')";

        if ($db->query($sql) === TRUE) {
            //set the session to the new user and go to index, which will display the new user as logged in
            $_SESSION['login_user'] = $username;
            header("location: ../tasty/public_html/index.php");
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
        // get username and password from the user object
        $username = $user->getUsername();
        $password = $user->getPassword();

        // initiatate databse connection
        $db = self::connectToDataBase();

        $sql = "SELECT id FROM member WHERE username = '$username' and password = '$password'";

        $result = mysqli_query($db, $sql);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        // If result matched $username and $password, table row must be 1 row
        if ($count == 1) {
            $_SESSION['login_user'] = $username;
            header("location: ../tasty/public_html/index.php");
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    }

    /**
     * User logout
     */
    public function logOutUser() {

        //check if login_user is set first, then logout
        if (isset($_SESSION['login_user'])) {
            if (session_destroy()) {
                header("Location: ../tasty/public_html/index.php");
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

        // gather information
        $name = $comment->getName();
        $text = $comment->getComment();
        $dish = $comment->getDish();
        $time = $comment->getTime();

        // initiatate databse connection
        $db = self::connectToDataBase();

        $sql = "INSERT INTO comment (name, comment, dish, post_time)
        VALUES ( '$name', '$text', '$dish', '$time')";

        if ($db->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }

    /**
     * @param $dish
     * @return bool|\mysqli_result
     */
    public function readComment($dish) {
        // initiatate databse connection
        $db = self::connectToDataBase();
        // return comments
        return mysqli_query($db, "select * from comment where dish = '$dish'");
    }


    /**
     * @param Comment $comment
     * @return bool|\mysqli_result
     */
    public function deleteComment(Comment $comment){
        // initiatate databse connection
        $db = self::connectToDataBase();
        $id = $comment->getId();

        $sql = "DELETE FROM comment WHERE id = '$id'";

        if ($db->query($sql) === TRUE) {
            return "true";
        }
    }
}