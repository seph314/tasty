<!--
<div class="main_content_container">
    <ul class="recipe">
        <li>
            <h1>Comments</h1>
            <div class="darker">
                <h3>Comment from <strong>Master-chef77</strong> 2017-11-03</h3>
                <p>This site is just amazing, beautiful and easy to navigate, not to mention the vast volume of delicious recipes! Would recommend 5/7</p>
            </div>
            <div class="darker">
                <h3>Comment from ICookFood 2017-11-01</h3>
                <p>I would not recommend this site, the ingredients burn't stuck in my frying pan.</p>
            </div>
        </li>
    </ul>
</div>
-->



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


