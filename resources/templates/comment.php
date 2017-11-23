
<?php
include("../resources/post_comment.php");
?>

<div class="main_content_container">
    <ul class="recipe">
        <li>
            <?php
                if(isset($_SESSION['login_user'])) {
                    require_once(TEMPLATES_PATH . "/make_comment.php");
                }
            ?>

            <?php
            include("../resources/read_comment.php");
            ?>

        </li>
    </ul>
</div>


