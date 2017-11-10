<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Tasty Recipes</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="css/calendar.css">
    <link rel="stylesheet" type="text/css" href="css/recipe.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="header-img"></div>

<div class="left_content_container">
    <ul class="menu">
        <li><img alt="Logotype for Tasty Recipes" src="img/layout/logo.png"></li>
        <li><h1>Menu</h1></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="calendar.php">Calendar</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Recipes</a>
            <div class="dropdown-content">
                <a href="meatballs.php">Meatballs</a>
                <a href="pancakes.php">Pancake</a>
                <a href="curry.php">Chicken Curry</a>
            </div>
        </li>
        <li>
            <a></a>
        </li>

    </ul>
</div>

<div>
    <ul class="login">
        <li>
            <form action="/action_page.php">
                <div>
                    <label><b>Username</b></label>
                    <b><input type="text" placeholder="Enter Username" name="uname" required></b>

                    <label><b>Password</b></label>
                    <b><input type="password" placeholder="Enter Password" name="psw" required></b>

                    <button type="submit" class="button">Login</button>
                </div>
            </form>
        </li>
    </ul>
</div>


