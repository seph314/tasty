<?php
include('connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['new_username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['new_password']);

    $sql = "INSERT INTO member (username, password)
    VALUES ('$myusername', '$mypassword')";

    if ($db->query($sql) === TRUE) {
        //set the session to the new user and go to index, which will display the new user as logged in
        $_SESSION['login_user']=$myusername;
        header("location: ../public_html/index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    $db->close();

}
?>


