<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");
?>


    <div class="col span_3_of_4" id="relative container">
        <ul class="recipe">
            <li>
                <div id="left absolute">
                    <h1>Welcome to Tasty Recipes</h1>
                    <p>This is the place to find delicious dishes from around the world. Wondering what's for dinner? <strong></br>Take a look at our Calendar function!</strong></p>
                 </div>
                <div class="container" id="right absolute">
                    <a class="image" href="calendar.php" id="img-a"><img id="img-half" src="img/content/composit4.png"></a>
                    <div class="middle">
                        <div class="text"><a href="calendar.php">Visit Calendar</a></div>
                    </div>
                </div>
            </li>
        </ul>

<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>