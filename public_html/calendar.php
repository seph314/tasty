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
    <div class="month">
        <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>
                August<br>
                <span style="font-size:18px">2017</span>
            </li>
        </ul>
    </div>

    <ul class="weekdays">
        <li>Mo</li>
        <li>Tu</li>
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
        <li>Su</li>
    </ul>

    <ul class="days">
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">1</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">2</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">3</li>
        <li><a href="pancakes.php"><img class="img-calendar grow" alt="Go to Pancakes recipe" src="img/content/pancakes-syrup.jpeg"></a>4</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">5</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">6</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">7</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">8</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">9</li>

        <li><img alt="Blank placeholder" src="img/content/placeholder.png">10</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">4</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">11</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">12</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">13</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">14</li>
        <li><a href="meatballs.php"><img class="img-calendar grow" alt="Go to Meatballs recipe" src="img/content/meatballs.png"></a>15</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">16</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">17</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">18</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">19</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">20</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">21</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">22</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">23</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">24</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">25</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">26</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">27</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">28</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">29</li>
        <li><img alt="Blank placeholder" src="img/content/placeholder.png">30</li>

    </ul>
</div>


<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>