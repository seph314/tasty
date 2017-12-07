
<?php
    // includes php code that calls the controller to post a comment
    include("../post_comment.php");
?>

<div class="main_content_container">
    <ul class="recipe">
        <li>
            <?php
                //includes the make comment part of the page if a user is logged in
                if(isset($_SESSION['login_user'])) {
                    require_once("../resources/templates/make_comment.php");
                }
                include("../read_comment.php");
            ?>
        </li>
    </ul>
</div>


