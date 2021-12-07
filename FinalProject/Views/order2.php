<?php
require('../Functions/auth_functions.php');
require('../Functions/admin_functions.php');
require('C:\xampp\htdocs\FinalProject\DB\db_connect.php');
is_logged();

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
  <div class="bg-light p-5 rounded" style="height: 100%;">
    <h1>Order Now</h1>
	<form method="POST">
	<div  class="form-floating">
	<button style="float: right; height: 55px" class="w-10 btn btn-lg btn-primary" value="search" name="search" type="submit">Search</button>
        <select style="width:90%;" name="type" class="form-control" id="type" placeholder="Type">
            <?php
            for($i = 0; $i < count($typeArray); $i++) {
                displayTypes($typeArray[$i], $i, true, "order");
            }
            ?>
        </select>
		<label for="type">Type</label>
    </div>
	<?php if(isset($_POST['search'])):?>
	<?php $restaurants = $restaurantFunctions->getRestaurantsByType($_POST['type']);?>
	<div style="margin-top: 100px; width: 48%; float: left;">
	<input type="text" style="width: 83%; margin-bottom: -50px;" id="filterRestaurants" class="form-control" placeholder="Search" />
	<button style="margin-left: 83%" class="w-10 btn btn-lg btn-primary" value="submitRestaurant" name="submitRestaurant" type="submit">Submit</button>
	<div style="border: 1px solid black; height: 600px; overflow-y: auto;">
	 <?php for($i = 0; $i < count($restaurants); $i++):?>
	    <div style="width: 100%; height: 150px;">
		  <input style="float: right; margin: 87px 50px 0px 0px; transform:scale(1.5);" type="radio" name="selectedRestaurant" value="<?=$restaurants[$i]['ID']?>">
		  <img src="<?=$restaurants[$i]['image_url']?>" height="175px" width="175px" style="float: left; padding-right: 10px">
		  <h2><?= $restaurants[$i]['name']?></h2>
		  <h5>Location:</h5>
		  <p style="margin-top:-10px;"><?=$restaurants[$i]['street']?></p>
		  <p style="margin-top:-20px;"><?=$restaurants[$i]['city']?>, <?=$restaurants[$i]['state']?> <?=$restaurants[$i]['zip']?></p>
		  <h5>Additional Info:</h5>
		  <p style="margin-top:-10px;">Rating: <?=$restaurants[$i]['rating']?> Stars</p>
	 <?php endfor;?>
	 </form>
	 </div>
	 </div>
	 </div>
	 <?php if(isset($_POST['submitRestaurant'])):?>
	 <div style="margin-top: 100px; width: 48%; float: right;">
	<input type="text" style="width: 83%; margin-bottom: -50px;" id="filterRestaurants" class="form-control" placeholder="Search" />
	<button style="margin-left: 83%" class="w-10 btn btn-lg btn-primary" value="submitRestaurant" name="submitRestaurant" type="submit">Submit</button>
	<div style="border: 1px solid black; height: 600px; overflow-y: auto;">
	<form method="POST">
	 <?php for($i = 0; $i < count($restaurants); $i++):?>
	    <div style="width: 100%; height: 150px;">
		  <input style="float: right; margin: 87px 50px 0px 0px; transform:scale(1.5);" type="radio" name="selectedRestaurant" value="<?=$restaurants[$i]['ID']?>">
		  <img src="<?=$restaurants[$i]['image_url']?>" height="175px" width="175px" style="float: left; padding-right: 10px">
		  <h2><?= $restaurants[$i]['name']?></h2>
		  <h5>Location:</h5>
		  <p style="margin-top:-10px;"><?=$restaurants[$i]['street']?></p>
		  <p style="margin-top:-20px;"><?=$restaurants[$i]['city']?>, <?=$restaurants[$i]['state']?> <?=$restaurants[$i]['zip']?></p>
		  <h5>Additional Info:</h5>
		  <p style="margin-top:-10px;">Rating: <?=$restaurants[$i]['rating']?> Stars</p>
	 <?php endfor;?>
	 </form>
	 </div>
	 </div>
	 </div>
	 <?php endif;?>
	<?php endif;?>
  	</form>
	</div>
</main>

	<script type="text/javascript" src="C:\xampp\htdocs\FinalProject\Functions\Ajax\search.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

      
  </body>
</html>
