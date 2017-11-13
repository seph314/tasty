<?php

$mydish = $_SESSION['dish'];
$comm = mysqli_query($db,"select * from comment where dish = 'meatballs'");

    while($row=mysqli_fetch_array($comm)) {
    $name = $row['name'];
    $comment = $row['comment'];
    $time = $row['post_time'];

?>

<div class="darker">
        <h3>Comment from <strong><?php echo $name;?></strong><?php echo $time;?></h3>
<p><?php echo $comment;?></p>
</div>


<?php
}
?>