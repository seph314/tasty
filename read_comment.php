<?php

namespace App\View;

use Controller\SessionManager;

$dish = basename($_SERVER['REQUEST_URI'], ".php");

//create controller instance and create a new user through the controller
$controller = SessionManager::getController();
$comm = $controller->readComment($dish);

// TODO add html entities to further secure the page
while ($row = mysqli_fetch_array($comm)) {

    // lagrar namn, kommentar och tidpunkten från när kommentaren postades
    $name = $row['name'];
    $comment = $row['comment'];
    $time = $row['post_time'];

    ?>
    <!-- skriver ut dem på hemsidan med en CSS formattering som matchar resten av sidan-->
    <div class="darker">
        <h3>Comment from <strong><?php echo $name; ?>&nbsp</strong><?php echo $time; ?></h3>
        <p><?php echo $comment; ?></p>

        <!-- Lägger till en knapp för att ta bort kommentaren endast om man är inloggad som samma anvädare som skrev kommentaren-->
        <?php

        if (isset($_SESSION['login_user'])) {
           if (strtolower($row['name']) == strtolower($_SESSION['login_user'])) {
                $id = $row['id']; ?>
                <form action='../remove_comment.php' id='removecommentform' method='post'>

                    <button class="button_dark" id='delete'>Delete</button>
                    <input type='hidden' name='deleteid' value='<?php echo "$id"; ?>'/>
                </form>
                <?php
            }
        }
        ?>
    </div>
    <?php
}
?>