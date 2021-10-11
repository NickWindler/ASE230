<?php
require('auth.php');
session_start();

if(count($_POST)>0){
    $error = false;
    $userFile = realpath('..\data\users.csv.php');
    // check if the email and password fields are empty, sets error = true if they are
    if($_POST['email'] == '') {
        echo "Please Enter your Email";
        echo '<br />';
        $error = true;
    }
    if($_POST['password'] == '') {
        echo "Please Enter your Password";
        echo '<br />';
        $error = true;
    }

    // check if the email is valid, sets error = true if the email is invalid
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Please Enter a Valid Email";
        echo '<br />';
        $error = true;
    }

    // check if password length is between 8 and 16 characters, if not then error will be set to true
    if(strlen($_POST['password'])<8 or strlen($_POST['password'])>16) {
        print("Your Password must be in Between 8 and 16 Characters");
        echo '<br />';
        $error = true;
    }

    // if there aren't any errors, then sign in the user
    if($error == false)
        signin($_POST['email'], $_POST['password'], $userFile);
}
?>
<h1>Please Sign In</h1>
<form method="POST">
    <label for="email">Email:</label><br>
    <input type="email" name="email" /><br><br>
    <label for="email">Password:</label><br>
    <input type="password" name="password"/><br><br>
    <input type="submit" value="submit"/>
</form>