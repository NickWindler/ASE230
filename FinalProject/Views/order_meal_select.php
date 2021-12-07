<?php
require('../Functions/auth_functions.php');
require('../Functions/admin_functions.php');
require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
require('../Functions/addtocart.php');
is_logged();

$meals = $mealFunctions->getMealsForRestaurant($_GET['rID']);
//create seperate function that will add meal to array which will be displayed in a seperate box
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

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
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

<main class="container" >
  <div class="bg-light p-5 rounded" style="height: 850px;">
    <h1 >Order Now</h1>
	<div style="margin-top: 25px; width: 48%; float: left;">
	<div style="border: 1px solid black; height: 600px; overflow-y: auto;">
	 <?php for($i = 0; $i < count($meals); $i++):?>
	    <div style="width: 100% height: 150px; margin-left: .01px; border: 1px solid black;">
		  <img src="<?=$meals[$i]['image_url']?>" height="150px" width="150px" style="float: left;">
		  <div style="margin-left: 160px">
		  <h3 style="min-height: 10px"><?=$meals[$i]['name']?></h3>
		  <p style="margin-top: -10px; height: 10px"><strong>Price: $<?=$meals[$i]['price']?></strong></p>
		  <p style="margin-top: -5px; height: 57px"><?=$meals[$i]['description']?></p>
		  <a href='../Functions/addtocart.php?name=<?=$meals[$i]['name']?>&price=<?=$meals[$i]['price']?>' style="height: 10px" >Add to Cart</a>
		  </div>
		  </div>
	 <?php endfor;?>
	 </div>
	 </div>
	 <div style="margin-top: 25px; width: 48%; float: right;">
	<div style="border: 1px solid black; height: 600px; overflow-y: auto;">
	 <?php for($i = 0; $i < count($cart); $i++):?>
	    <div style="width: 100% height: 150px; margin-left: .01px;">
		  <h3><?=$cart[$i][0]?></h3>
		  <p>Price: $<?=$cart[$i][1]?></p>
		  </div>
		  	 </div>
	 <?php endfor;?>
	 </div>
	 </div>
	 <form method="POST">
	 <div style="margin-top: 650px;">
		<button style="float: right;" class="w-10 btn btn-lg btn-primary" value="next" name="next" type="submit">Next</button>
		<button style="float: left;" class="w-10 btn btn-lg btn-primary" value="previous" name="previous" type="submit">Previous</button>
	</div>
	</form>
	 </div>
	<?php if(isset($_POST['next'])) header('Location:order_restaurant_select.php?typeID='.$_GET['type']);?>
	<?php if(isset($_POST['previous'])) header('Location:order_restaurant_select.php?typeID='.$_GET['typeID']);?>


</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type='text/javascript'>
		/*function addToCart(array) {
			$.ajax({
				type: "POST",
				url: "order_meal_select.php",
				dataType: "json",
				data: {myArray: array},
				success: function (result) {
					alert("result");
				}
			});
		}
		function addToCart(name, price) {
			array = [name, price];
			$.ajax({
				type: POST,
				url: "order_meal_select.php",
				data: {data: array},
				success: function(){
					alert("OK");
				}
			});
		}*/
	</script>
      
  </body>
</html>
