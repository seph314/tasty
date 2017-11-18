<?php
session_start();

// kolla om det finns en inloggad användare
if (isset($_SESSION['login_user'])) {

    include('connect.php');

    $user_check = $_SESSION['login_user'];

    $ses_sql = mysqli_query($db, "select username from member where username = '$user_check' ");

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['username'];
}
// annars
else{
    header("location:login.php");
}

?>



