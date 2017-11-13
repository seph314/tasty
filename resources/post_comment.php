<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    // username and password sent from form
    $mycomment = mysqli_real_escape_string($db,$_POST['comment']);
    $name=$_POST['comment'];
    $mydish = $_SESSION['dish'];
    $time = date('Y-m-d H:i:s');
    $sql = "INSERT INTO comment ( name, comment, dish, post_time )
    VALUES ( '$login_session', '$mycomment', '$mydish', '$time')";

    if ($db->query($sql) === TRUE) {
        echo "New comment created";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    $db->close();
}
?>