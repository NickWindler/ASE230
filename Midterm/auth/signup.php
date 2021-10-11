<?php
require('auth.php');
session_start();
if(count($_POST)>0){
    $error = false;
    $userFile = realpath('..\data\users.csv.php');
    // check if the email and password fields are empty, sets error = true if they are
    if($_POST['email'] == '') {
        echo "Please Enter a Email";
        echo '<br />';
        $error = true;
    }
    if($_POST['password'] == '') {
        echo "Please Enter a Password";
        echo '<br />';
        $error = true;
    }

    // check if the email is valid, sets error = true if the email is invalid
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Your Email Adress is Invalid";
        echo '<br />';
        $error = true;
    }

    // check if password length is between 8 and 16 characters, if not then error will be set to true
    if(strlen($_POST['password'])<8 or strlen($_POST['password'])>16) {
        print("Please Enter a Password Between 8 and 16 Characters");
        echo '<br />';
        $error = true;
    }

    // if there aren't any errors, then sign in the user
    if($error == false)
        signup($_POST['email'], $_POST['password'], $userFile);
}
?>
<h1>Register your Account</h1>
<form method="POST">
    <label for="email">Email:</label><br>
    <input type="email" name="email" /><br><br>
    <label for="email">Password:</label><br>
    <input type="password" name="password"/><br><br>
    <input type="submit" value="submit"/>
</form>