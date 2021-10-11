<?php
require('auth.php');
session_start();
// if the user is not logged in, redirect them to the public page
if($_SESSION['logged'] = false)
    header("Location:../index.php");
signout();
?>