<!--
--><?php
/*// includes php code that calls the controller to post a comment
include("../post_comment.php");
*/ ?>

<?php $_SESSION['dish'] = basename($_SERVER['REQUEST_URI'], ".php"); ?>

<script data-require="jquery@*" data-semver="3.1.1"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script> -->

<div class="main_content_container" id="commentsdiv">
    <ul class="recipe">
        <li>
            <?php
            // you can only make a comment when logged in
            if (isset($_SESSION['login_user'])) {
                /* require_once("../resources/templates/make_comment.php"); */
                ?>
                <div>
                    <h1>Comments</h1>
                    <textarea class="comment" data-bind="textInput: commentText"
                              placeholder="Write Your Comment Here....."></textarea>
                    <br>
                    <button class="button_dark" data-bind="click: submitComment">Send</button>
                </div>

                <script type='text/javascript' src="http://localhost/~Anders/tasty/public_html/js/script.js"></script>


                <?php
            }
            /* include("../read_comment.php");*/
            ?>

            <!-- ko foreach: {data: retrievedComments, as: 'entry'} -->

            <div class='darker'>

                <div>Comment by: <span data-bind="text: entry.name"></span><span data-bind="text: entry.time"></span></div>
                <p data-bind="text: entry.comment"></p>
                <!-- ko if: entry.author -->
                <button class="button_dark" data-bind="click: $parent.deleteComment">Delete</button>
                <!-- /ko -->
            </div>
            <!-- /ko -->

        </li>
    </ul>
</div>

