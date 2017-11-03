<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");
?>

<div class="col">
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
        <li><img src="img/content/transparent.png">1</li>
        <li><img src="img/content/transparent.png">2</li>
        <li><img src="img/content/transparent.png">3</li>
        <li><a id="img-a" href="pancakes.php"><img class="img-circle" src="img/content/pancakes-maple-syrup-sweet-407041.jpeg"></a>4</li>
        <li><img src="img/content/transparent.png">5</li>
        <li><img src="img/content/transparent.png">6</li>
        <li id="clear-left"><img src="img/content/transparent.png">7</li>
        <li><img src="img/content/transparent.png">8</li>
        <li><img src="img/content/transparent.png">9</li>

        <li><img src="img/content/transparent.png">10</li>
        <li><img src="img/content/transparent.png">4</li>
        <li><img src="img/content/transparent.png">11</li>
        <li><img src="img/content/transparent.png">12</li>
        <li><img src="img/content/transparent.png">13</li>
        <li><img src="img/content/transparent.png">14</li>
        <li><a id="img-a" href="meatballs.php"><img class="img-circle" src="img/content/meatballs.jpeg"></a>15</li>
        <li><img src="img/content/transparent.png">16</li>
        <li><img src="img/content/transparent.png">17</li>
        <li><img src="img/content/transparent.png">18</li>
        <li><img src="img/content/transparent.png">19</li>
        <li><img src="img/content/transparent.png">20</li>
        <li><img src="img/content/transparent.png">21</li>
        <li><img src="img/content/transparent.png">22</li>
        <li><img src="img/content/transparent.png">23</li>
        <li><img src="img/content/transparent.png">24</li>
        <li><img src="img/content/transparent.png">25</li>
        <li><img src="img/content/transparent.png">26</li>
        <li><img src="img/content/transparent.png">27</li>
        <li><img src="img/content/transparent.png">28</li>
        <li><img src="img/content/transparent.png">29</li>
        <li><img src="img/content/transparent.png">30</li>
        
    </ul>
</div>


<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>