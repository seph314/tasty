<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");
?>


    <div class="main_content_container">
        <ul class="recipe hover">
            <li>
                    <h1>Welcome to Tasty Recipes</h1>
                    <p>This is the place to find delicious dishes from around the world. Wondering what's for dinner?</p><p><strong>Take a look at our Calendar function!</strong></p>
                    <div class="hover_container">
                    <a class="hover" href="calendar.php"><img class="img" alt="Go to calendar" src="img/content/composit4.png"></a>
                    <div class="middle">
                        <div class="text"><a href="calendar.php">Visit Calendar</a></div>
                    </div>
                    </div>
            </li>
        </ul>
    </div>


<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>