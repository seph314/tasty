<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");
?>

    <div class="col span_3_of_4" id="relative">
        <ul class="recipe">
            <li>
                    <div id="left absolute">
                        <h1>Meatballs</h1>
                        <p>Make tasty meatballs with this awesome recipe</p>
                        <h2>Ingredients (4 persons)</h2>
                        <p>3 eggs</p>
                        <p>4 dl flower</p>
                        <p>8 dl milk</p>
                        <p>1/2 table spoon baking soda</p>
                        <p>1 pinch fresh vanilla</p>
                    </div>
                    <div id="right">right</div>
                    <div id="center"></div>
            </li>
        </ul>
    </div>
    <div class="col span_3_of_4" id="absolute">
        <ul class="recipe">
            <li>
                <h1>Comments</h1>
                <div id="darker">
                    <h3>Comment from Master-chef77 2017-11-03</h3>
                    <p>This site is just amazing, beautiful and easy to navigate, not to mention the vast volume of delicious recipes! Would recommend 5/7</p>
                </div>
                <div id="darker">
                    <h3>Comment from ICookFood 2017-11-01</h3>
                    <p>I would not recommend this site, the ingredients burn't stuck in my frying pan.</p>
                </div>
            </li>
        </ul>
    </div>
    <div>
        <!-- <img src="img/content/pancakes-maple-syrup-sweet-407041.jpeg"> -->
    </div>

<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>