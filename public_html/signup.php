<?php
namespace App\View;
use Util\Config;
require_once '../classes/App/Util/Config.php';
Config::initRequest();


//checks if you are signed in or not and displays appropriate information
if(isset($_SESSION['login_user'])){
    require_once("../resources/templates/header_signedin.php");
}
else{
    require_once("../resources/templates/header.php");
}

?>

    <div class="main_content_container">
        <ul class="signup">
            <li>
                <h1>Create Account</h1>
                <h2>Welcome to our food loving community!</h2>
                <div>
                    <ul>
                        <li>
                            <form action="../newuser.php" method="post">
                                <div>
                                    <label><b>Username</b></label>
                                    <b><input type="text" placeholder="Enter Username" name="new_username" required></b>

                                    <label><b>Password</b></label>
                                    <b><input type="password" placeholder="Enter Password" name="new_password" required></b>

                                    <button type="submit" class="button">Create</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

<?php
include("../newuser.php");
?>

<?php
require_once("../resources/templates/footer.php");
?>