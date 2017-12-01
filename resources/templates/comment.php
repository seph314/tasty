
<?php

include("../post_comment.php");
?>

<div class="main_content_container">
    <ul class="recipe">
        <li>
            <?php
                if(isset($_SESSION['login_user'])) {
                    require_once("../resources/templates/make_comment.php");
                }
            ?>

            <?php
            include("../read_comment.php");
            ?>

        </li>
    </ul>
</div>


