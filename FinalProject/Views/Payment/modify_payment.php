<?php
require('../../Functions/auth_functions.php');
require('../../Functions/profile_functions.php');
require('../../DB/db_connect.php');
is_logged();

// if the user is already signed in, redirect them to the members_page.php page
if($_SESSION['logged'] == false)
    header("Location:../index.php");

$stmt = $db->query('SELECT * FROM payments WHERE ID = ' . $_GET['id']);
$paymentDetails = $stmt->fetch();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Tofoo Modify Address</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../../css/bootstrap.min.css" rel="stylesheet">    
    <!-- Custom styles for this template -->
    <link href="../../Style/sign-in.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal">Modify Payment</h1>
	
	<div class="form-floating">
      <input type="text" name="card_number" class="form-control" value="<?=$paymentDetails['card_number']?>" id="floatingInput" placeholder="Card Number" maxlength="16" required>
      <label for="floatingInput">Card Number</label>
    </div>
	<div class="form-floating">
      <input type="text" name="security_code" class="form-control" value="<?=$paymentDetails['security_code']?>" id="security_code" placeholder="Security Code" maxlength="3" required>
      <label for="security_code">Security Code</label>
    </div>
	<div class="form-floating">
      <input type="text" name="expiration_date" class="form-control" value="<?=$paymentDetails['expiration_date']?>" id="expiration_date" placeholder="State" maxlength="5" required>
      <label for="expiration_date">Expiration Date (Format: MM/YY)</label>
    </div>

    <button style="margin-top:10px;" class="w-100 btn btn-lg btn-primary" value="submit" name="submit" type="submit">Submit</button>
	<button style="margin-top:10px;" class="w-100 btn btn-lg btn-primary" value="delete" name="delete" type="submit">Delete</button>
  </form>
  <?php
	  if(isset($_POST['submit'])) 
		$paymentFunctions->modifyPayment($_GET['id'], $paymentDetails['user_id'], $_POST['card_number'], $_POST['security_code'], $_POST['expiration_date']);	
	  if(isset($_POST['delete'])) 
		$paymentFunctions->deletePayment($_GET['id'], $paymentDetails['user_id']);
	?>
</main>
    
  </body>
</html>