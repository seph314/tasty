<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");
?>

    <div class="col span_3_of_4" id="relative container">
        <ul class="recipe">
            <li>
                <div id="left" absolute">
                <h1>Meatballs</h1>
                <p>Make tasty meatballs with this awesome recipe</p>
                <h2>Ingredients (4 persons)</h2>
                <p>500g ground beef</p>
                <p>1 onion</p>
                <p>1 garlic clove</p>
                <p>1 egg</p>
                <p>1dl breadcrumbs</p>
                <p>a pinch of salt</p>
                <p>a pinch of pepper</p>
                <p>1 tablespoon paprika spice mix</p>
                </div>
                <div id="right absolute"><img id="img" src="img/content/meatballs-1992354_1920.jpg"></div>
            </li>
        </ul>
    </div>
    <div class="col span_3_of_4" id="absolute">
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