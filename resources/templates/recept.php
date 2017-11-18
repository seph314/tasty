
<?php
require_once("../resources/session.php");

// stores the current pages dish in $mydish and uses it to get the right xml for the recipe
$mydish = str_replace(".php", "", $_SESSION['dish']);
echo "här:", $mydish, "hej";
$xml = simplexml_load_file(dirname(__DIR__)."/xml/$mydish.xml");


?>

<div class="main_content_container">
    <ul class="recipe">
        <li>
            <h1><?echo $xml->recipe->title;?></h1>
            <p>Make tasty <?echo $mydish;?> with this awesome recipe</p>
            <p>&nbsp</p>
            <h2>Ingredients (4 persons)</h2>

                <?php
                foreach ($xml->recipe->ingredient->li as $i) {
                    echo "<p>". $i ."</p>";
                }
                ?>
        </li>
        <li>
            <h2>Directions</h2>
            <p>
                <?php
                foreach ($xml->recipe->recipetext->li as $i) {
                    echo "<p>". $i ."</p>";
                }
                ?>
            </p>
        </li>
        <li>
            <img alt='<?php echo $mydish;?>' class="img" src='<?php echo $xml->recipe->imagepath;?>'>
        </li>
    </ul>
</div>
