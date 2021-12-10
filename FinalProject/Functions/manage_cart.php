<?php
session_start();
if($_GET['function'] == 'add')
    $_SESSION['cart'][] = [$_GET['name'], $_GET['price']];
if($_GET['function'] == 'remove')
    array_splice($_SESSION['cart'], $_GET['index'], 1);
header('Location:../Views/order_meal_select.php?typeID='.$_GET['typeID'].'&rID='.$_GET['rID']);
?>