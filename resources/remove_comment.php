<?php
/**
 * Removes a comment made by a logged in user
 */

include("session.php");
$mydish = $_SESSION['dish'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $id = mysqli_real_escape_string($db,$_POST['deleteid']);
    $sql = "DELETE FROM comment WHERE id =  '$id'";
    if ($db->query($sql) === TRUE) {
        header("location: ../../tasty/public_html/$mydish.php");
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    $db->close();
}
?>