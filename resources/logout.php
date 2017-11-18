<?php
session_start();

//check if login_user is set first, then logout
if(isset($_SESSION['login_user'])){
    if(session_destroy()) {
        header("Location: ../public_html/index.php");
    }
}

?>