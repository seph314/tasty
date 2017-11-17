<?php
// load up your config file
require_once("../resources/config.php");
require_once("../resources/session.php");

//checks if you are signed in or not and displays appropriate information
if(isset($_SESSION['login_user'])){
    require_once(TEMPLATES_PATH . "/header_signedin.php");
}
else{
    require_once(TEMPLATES_PATH . "/header.php");
}

?>

<?php
require_once(TEMPLATES_PATH . "/recept.php");
?>



<?php
$_SESSION['dish'] = basename(__FILE__, '.php');
require_once(TEMPLATES_PATH . "/comment.php");
require_once(TEMPLATES_PATH . "/footer.php");
?>