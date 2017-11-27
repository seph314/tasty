
<?php
// echo getcwd();
// ger path:  /Users/Anders/Sites/tasty/public_html
// jag har kollat så att alla paths stämmer i det här dokumentet, något annat är fel

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


