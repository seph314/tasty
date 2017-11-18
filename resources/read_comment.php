<?php
// include connect to database, otherwise comments will only show if logged in
require_once("../resources/connect.php");
$mydish = $_SESSION['dish'];
$comm = mysqli_query($db,"select * from comment where dish = '$mydish'");
    while($row=mysqli_fetch_array($comm)) {


    $name = $row['name'];
    $comment = $row['comment'];
    $time = $row['post_time'];

?>

        <div class="darker">
        <h3>Comment from <strong><?php echo $name;?>&nbsp</strong><?php echo $time;?></h3>
        <p><?php echo $comment;?></p>

    <!-- Adds delete button for comments made by logedin user-->
    <?php
    if(isset($_SESSION['login_user'])) {
        if(strtolower($row['name']) == strtolower($_SESSION['login_user'])){
            $id = $row['id'];?>
            <form action='../resources/remove_comment.php' id='removecommentform' method = 'post'>

                <button class="button_dark" id='delete'>Delete</button>
                <input type='hidden' name='deleteid' value='<?php echo "$id";?>'/>
            </form>
            <?php
        }}
    ?>


</div>



<?php

}

?>