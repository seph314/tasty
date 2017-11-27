<?php
// load config and session
//require_once("../resources/config.php");
//require_once("../resources/session.php");

namespace App\Util;
use Util\Config;
require_once '../classes/App/Util/Config.php';
// require_once("../resources/config.php");
Config::initRequest();
// Config::setup();


//checks if you are signed in or not and displays appropriate information
if (isset($_SESSION['login_user'])) {
    require_once("../resources/templates/header_signedin.php");
} else {
    require_once("../resources/templates/header.php");
}
?>

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