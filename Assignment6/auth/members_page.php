<?php
require('auth.php');
session_start();
is_logged();

if($_SESSION['logged'] == true)
    print("Welcome User " . $_SESSION['email'] . "!");
else
    print("You cannot access the content of this page, please sign in");
?>
<?php if($_SESSION['logged'] == true):?>
    <br><input type="button" onclick="location.href='signout.php';" value="Sign Out"/>
<?php endif;?>
<?php if($_SESSION['logged'] == false):?>
    <br><input type="button" onclick="location.href='signin.php';" value="Sign In"/>
<?php endif;?>
