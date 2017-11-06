<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");
?>

    <div class="main_content_container" id="relative">
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
                <img id="img" src="img/content/curry-390550_1920.jpg">
            </li>
        </ul>
    </div>

    <div class="main_content_container" id="relative">
        <ul class="recipe">
            <li>
                <h1>Comments</h1>
                <div id="darker">
                    <h3>Comment from <strong>Master-chef77</strong> 2017-11-03</h3>
                    <p>This site is just amazing, beautiful and easy to navigate, not to mention the vast volume of delicious recipes! Would recommend 5/7</p>
                </div>
                <div id="darker">
                    <h3>Comment from ICookFood 2017-11-01</h3>
                    <p>I would not recommend this site, the ingredients burn't stuck in my frying pan.</p>
                </div>
            </li>
        </ul>
    </div>

<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>