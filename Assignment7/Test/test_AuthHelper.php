<?php
session_start();
require('../Helper/AuthHelper.php');

//create authFunctions object to have access to the classes functions
$authFunctions = new authFunctions();

//sets the user file for the newly created authFunctions object 
$authFunctions->setUserFile('../Data/auth_data.csv');

echo '<h2>Sign Up</h1>';
//call to sign in function with an invalid password
$authFunctions->signup('windlern1','062900');
echo '<br \>';
//valid parameters so user will be created/added to CSV file
$authFunctions->signup('username','abc123$^&');
//will throw "email is already in use" error
$authFunctions->signup('username','uerio!!!');

echo '<h2>Sign In</h1>';
//tries to sign in with an invalid password 
$authFunctions->signin('username','ab09234j');
echo '<br \>';
//successful sign in
$authFunctions->signin('username','abc123$^&');

//calls the  is_logged() function to make sure the user has successfully logged in
echo '<h2>User Logged?</h1>';
$authFunctions->is_logged();
if($_SESSION['logged'])
    print("True");
else
    print("False");

//signs out the user
$authFunctions->signout();

//calls the  is_logged() function to show that the user has been signed out
echo '<h2>User Logged after Sign Out?</h1>';
$authFunctions->is_logged();
if($_SESSION['logged'])
    print("True");
else
    print("False");

?>