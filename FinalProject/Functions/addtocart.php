<?php
$cart = [];
$array = [$_GET['name'], $_GET['price']];
$cart = array_push($array);
print_r($cart[0]);
?>