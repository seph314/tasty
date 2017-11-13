<?php

    session_start();
    include('connect.php');

    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($db, "select username from member where username = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['username'];

    if (!isset($_SESSION['login_user'])) {
        header("location:login.php");
    }

?>