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

    <div class="main_content_container">
        <ul class="recipe">
            <li>
                <h1>Chicken Curry</h1>
                <p>Make a tasty curry with this awesome recipe</p>
                <h2>Ingredients (4 persons)</h2>
                <p>4 chicken breasts</p>
                <p>1 onion</p>
                <p>1 garlic clove</p>
                <p>Curry paste</p>
                <p>Coriander</p>
                <p>a pinch of salt</p>
                <p>a pinch of pepper</p>
            </li>
            <li>
                <h2>Directions</h2>
                <p>Cut the chicken in pieces and fry them together with the chopped onion, in oil, on high heat, until golden.</p>
                <p>Lower the temperature a bit and add curry paste, let it fry a little more. Add coriander and garlic.</p>
                <p>Add the cream and let it be at a temperature almost boiling but not quite for half an hour.</p>
                <p>Season with salt and pepper.</p>
            </li>
            <li>
                <img alt="Curry" class="img" src="img/content/curry-390550_1920.jpg">
            </li>
        </ul>
    </div>


<?php
$_SESSION['dish'] = basename(__FILE__, '.php');
require_once(TEMPLATES_PATH . "/comment.php");
require_once(TEMPLATES_PATH . "/footer.php");
?>