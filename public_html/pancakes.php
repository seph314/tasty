<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");
?>
    <div class="main_content_container" id="relativer">
        <ul class="recipe">
            <li>
                <h1>Pancakes</h1>
                <p>Make tasty meatballs with this awesome recipe</p>
                <h2>Ingredients (4 persons)</h2>
                <p>3 eggs</p>
                <p>4 dl flour</p>
                <p>8 dl milk</p>
                <p>1/2 table spoon baking soda</p>
                <p>1 pinch fresh vanilla</p>
            </li>
            <li>
                <h2>Directions</h2>
                <p>Pour all the flour into a bowl, add the eggs and half of the milk. Blend together until no lumps.</p>
                <p>Mix in the salt, and baking soda. Then add the rest of the flour, let it be for a while.</p>
                <p>Fry the pancakes in butter on medium high heat.</p>
            </li>
            <li>
                <img id="img" src="img/content/pancakes-maple-syrup-sweet-407041.jpeg">
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