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

        // prepare statment and bind parameters
        $sql = $db->prepare("INSERT INTO member (username, password) VALUES (?, ?)");
        $sql->bind_param("ss", $username, $password);

        // get username and password from the user object
        $username = $user->getUsername();
        $password = $user->getPassword();

        // $sql->execute() returns boolean to se if the command was executed successfully
        if ($sql->execute() /*$db->query($sql) === TRUE*/) {
            //set the session to the new user and go to index, which will display the new user as logged in
            $_SESSION['login_user'] = $username;
            return TRUE;
            // header("location: ../tasty/public_html/index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
        $db->close();

       /* koden funkar men är sårbar för SQL injections
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
       */
    }

    /**
     * User login
     * @param User $user
     */
    public function loginUser(User $user) {

        // initiate database connection
        $db = self::connectToDataBase();

        // prepare statment and bind parameters
        $sql = $db->prepare("SELECT password FROM member WHERE username =?");
        $sql->bind_param("s", $username);

        // get username and password from the user object
        $username = $user->getUsername();
        $password = $user->getPassword();

        $sql->execute();
        $sql->store_result();
        $sql->bind_result($encrypted_password);
        $sql->fetch();
        $sql->num_rows;

        // login if encrypted password matches user input
        if (password_verify($password, $encrypted_password)) {
            return $sql->num_rows;
        }

            /* tar bort den här delen temporärt och testar om en annan sak funkar
            // get encrypted password
            $result_encrypted = mysqli_query($db, $sql_encrypted);
            $row_encrypted = mysqli_fetch_array($result_encrypted, MYSQLI_ASSOC);
            $password_encrypted = $row_encrypted['password'];

            // if the SQL command was successful
            if($sql_encrypted->execute()){

                // login
                if (password_verify($password, $password_encrypted)){

                    $sql = "SELECT id FROM member WHERE username = '$username'";
                    $result = mysqli_query($db, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $active = $row['active'];
                    return $count = mysqli_num_rows($result);
                }
            */
        }


        // TODO Ska man prepare alla mysqli_query mm eller endast de som hämtar från databasen?


        /* working older code 29/11-2017
        // get username and password from the user object
        $username = $user->getUsername();
        $password = $user->getPassword();

        // initiatate databse connection
        $db = self::connectToDataBase();

        // hämta det hashade lösenordet
        $sql_encrypted = "SELECT password FROM member WHERE username = '$username'";
        $result_encrypted = mysqli_query($db, $sql_encrypted);
        $row_encrypted = mysqli_fetch_array($result_encrypted, MYSQLI_ASSOC);
        $password_encrypted = $row_encrypted['password'];

        // logga in som tidigare om anggivet lösenord matchar det krypterade
        if (password_verify($password, $password_encrypted)){

            $sql = "SELECT id FROM member WHERE username = '$username'";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $active = $row['active'];
            return $count = mysqli_num_rows($result);
        }
        */


        /* even older code
        $sql = "SELECT id FROM member WHERE username = '$username' and password = '$password'";

        $result = mysqli_query($db, $sql);

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['active'];

        return $count = mysqli_num_rows($result);
        */



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

        // prepare statment and bind parameters
        $sql = $db->prepare("INSERT INTO comment (name, comment, dish, post_time)
        VALUES ( ?, ?, ?, ?)");
        $sql->bind_param("ssss", $name, $text, $dish, $time);

        // return
        return $sql->execute();



        /* Gammla koden innan SQL-injection-skydd
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
        */
    }


    // TODO gör klart readComment och deleteComment SQL-injection-proof
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

        /* old working code
        // initiatate databse connection
        $db = self::connectToDataBase();
        // return comments
        return mysqli_query($db, "select * from comment where dish = '$dish'");
        */
    }


    /**
     * @param Comment $comment
     * @return bool|\mysqli_result
     */
    public function deleteComment(Comment $comment){
        $db = self::connectToDataBase();
        $id = $comment->getId();

        $sql = $db->prepare("DELETE FROM comment WHERE id = ?");
        $sql->bind_param("i", $id);

        return $sql->execute();

        /* old working code
        // initiatate databse connection
        $db = self::connectToDataBase();
        $id = $comment->getId();

        $sql = "DELETE FROM comment WHERE id = '$id'";
        return $db->query($sql);
        */


        /* old code
         if ($db->query($sql) === TRUE) {
            return "true";
        }
        */
    }
}