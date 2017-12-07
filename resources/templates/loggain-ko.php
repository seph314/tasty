<div>
    <ul class="login">
        <li>
            <span>
                <input placeholder="username" data-bind="value: username" required>
            </span>
            <span>
                <input placeholder="password" type="password" data-bind="value: password" required>
            </span>
            <button data-bind="click: sendEntry">Send</button>

            <!-- testmeddelande -->
            <div data-bind="text: test"></div>


             <!-- calls JavaScript-->
             <script type='text/javascript' src="js/script.js"></script>


        <!-- <input class="button" type="submit" value="sign in" data-bind="enable: buttonEnabled"> -->
        <!--  </form>-->

        <!--
        <form action="../login.php" method="post">
            <div>
                <label><b>Username</b></label>
                <b><input type="text" placeholder="Enter Username" name="username" required></b>

                <label><b>Password</b></label>
                <b><input type="password" placeholder="Enter Password" name="password" required></b>

                <button type="submit" class="button">Login</button>
            </div>
            <b><a href = "../public_html/signup.php">Create Account</a></b>
        </form>
        -->

        </li>
    </ul>
</div>


