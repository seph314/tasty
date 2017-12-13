<?php $_SESSION['dish'] = basename($_SERVER['REQUEST_URI'], ".php"); ?>

<script data-require="jquery@*" data-semver="3.1.1"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script> -->

<div class="main_content_container">
    <ul class="recipe">
        <li>
            <?php
            // you can only make a comment when logged in
            if (isset($_SESSION['login_user'])) {
                ?>
                <div>
                    <h1>Comments</h1>
                    <textarea class="comment" data-bind="textInput: commentText"
                              placeholder="Write Your Comment Here....."></textarea>
                    <br>
                    <button class="button_dark" data-bind="click: submitComment">Send</button>
                </div>
                <?php
            }
            ?>
            <!-- ko foreach: {data: retrievedComments, as: 'entry'} -->
            <div class='darker'>
                <div>Comment by: <span data-bind="text: entry.name"></span>
                </div>
                <p data-bind="text: entry.comment"></p>
                <!-- ko if: entry.author -->
                <button class="button_dark" data-bind="click: $parent.deleteComment">Delete</button>
                <!-- /ko -->
            </div>
            <!-- /ko -->
            <script type='text/javascript' src="/~Anders/tasty/public_html/js/script.js"></script>
        </li>
    </ul>
</div>

