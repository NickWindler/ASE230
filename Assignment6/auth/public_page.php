<?php
require('auth.php');
session_start();
is_logged();
?>
    <h1>Public Page</h1>
<?php if($_SESSION['logged'] == true):?>
    <p><?="You are currently viewing the public page as " . $_SESSION['email']?></p>
    <input type="button" onclick="location.href='signout.php';" value="Sign Out"/>
<?php endif;?>
<?php if($_SESSION['logged'] == false):?>
    <p>Already have an account?</p>
    <input type="button" onclick="location.href='signin.php';" value="Sign In"/><br><br>
    <p>Don't have an account?</p>
    <input type="button" onclick="location.href='signup.php';" value="Sign Up"/>
<?php endif;?>