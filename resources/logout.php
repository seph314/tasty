<?php
session_start();

if(session_destroy()) {
    header("Location: ../public_html/index.php");
}
?>