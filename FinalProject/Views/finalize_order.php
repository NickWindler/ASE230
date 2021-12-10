<?php
require('../Functions/auth_functions.php');
require('../Functions/admin_functions.php');
is_logged();

if($_SESSION['logged'] == false)
    header("Location:index.php");

$cart = $_SESSION['cart'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Tofoo Order Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../Style/index.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tofoo Order Services</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="order.php">Order</a>
                </li>
                <?php if($_SESSION['role'] == 1):?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Admin View</a>
                    </li>
                <?php endif;?>
            </ul>
            <?php if($_SESSION['logged'] == true):?>
                <li class="navbar-nav mb-2 mb-md-0">
                    <a class="nav-link" href="profile.php?id=<?=$res['ID']?>">Profile</a>
                </li>
            <?php endif;?>
            <?php if($_SESSION['logged'] == false):?>
                <li class="navbar-nav mb-2 mb-md-0">
                    <a class="nav-link" href="Authentication/sign-in.php">Sign In</a>
                </li>
            <?php endif;?>
            <?php if($_SESSION['logged'] == true):?>
                <li class="navbar-nav mb-2 mb-md-0">
                    <a class="nav-link" href="Authentication/sign-out.php">Sign Out</a>
                </li>
            <?php endif;?>
        </div>
    </div>
</nav>
<body class="text-center">
<main class="form-signin">
    <h1>Order Details</h1>
    <!--<ul style="display: inline;">
	<li style="display: inline;"><strong>Meals: </strong></li>
	<?php for($i = 0; $i < count($cart); $i++):?>
	<?php $price = $price + $cart[$i][1]?>
	<li style="display: inline;"><?=$orderDetails[$i]['name']?> (<?=$orderDetails[$i]['restaurant_name']?>)</li>
	<?php endfor;?>
	</ul>
	<br><br>
	<p><strong>Date: </strong><?=substr($orderDetails[0]['date'], 0, 10)?></p>
	<p><strong>Total: </strong>$<?=$price?></p>
	<p><strong>Status: </strong>
	<?php if($orderDetails[0]['status'] == 0):?>
	In Transit 
	<?php endif;?>
	<?php if($orderDetails[0]['status'] == 1):?>
	Delivered
	<?php endif;?></p>
	<a href="../profile.php?id=<?=$_GET['id']?>"><strong>Back to Profile</strong></a>-->
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>