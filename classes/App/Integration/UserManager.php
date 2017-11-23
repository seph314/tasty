<?php

namespace Integration;

use Model\User;

class UserManager {


    /* Logic used to connect to database
    */
    private function connectToDataBase() {
        define('DB_SERVER', 'localhost:3306');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', 'password');
        define('DB_DATABASE', 'tasty');
        // return
        return mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    }

    /**
     * UserManager constructor.
     * Connects to database
     */
    public function __construct() {
        $this->connectToDataBase();
    }


    /**
     * Creates new user
     * Stores in MySQL database tasty
     * @param User $user
     */
    public function newUser(User $user){
        // get username and password from the user object
        $username = $user->getUsername();
        $password = $user->getPassword();

        // initiatate databse connection
        $db = self::connectToDataBase();

        $sql = "INSERT INTO member (username, password)
        VALUES ('$username', '$password')";

        if ($db->query($sql) === TRUE) {
            //set the session to the new user and go to index, which will display the new user as logged in
            $_SESSION['login_user']=$username;
            header("location: ../tasty/public_html/index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }
        $db->close();
    }
}