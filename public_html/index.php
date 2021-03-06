<?php

namespace App\View;

use Util\Config;

require_once '../classes/App/Util/Config.php';
Config::initRequest();


//checks if you are signed in or not and displays appropriate information
if (isset($_SESSION['login_user'])) {
    require_once("../resources/templates/header_signedin.php");
} else {
    require_once("../resources/templates/header.php");
}
?>

<!--    <script>
        $(document).ready(function () {
            if (!<?php /*echo isset($_SESSION['login_user']) ? 'true' : 'false'; */?>) {
                alert("session")
            } else {
                alert('work')
                location.href = '../public_html/';
            }

        });
    </script>-->



    <div class="main_content_container">
        <ul class="recipe">
            <li class="nostyle">
                <h1>Welcome to Tasty Recipes</h1>
                <p>This is the place to find delicious dishes from around the world. Wondering what's for dinner?</p>
                <p><strong>Take a look at our Calendar!</strong></p>
                <a href="calendar.php"><img class="img grow_a_little" alt="Go to calendar"
                                            src="img/layout/visit_calendar_notext.png"></a>
            </li>
        </ul>
    </div>

    <?php
// load footer
require_once("../resources/templates/footer.php");
?>