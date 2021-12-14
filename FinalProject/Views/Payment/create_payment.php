<?php
require('../../Functions/auth_functions.php');
require('../../Functions/profile_functions.php');
is_logged();

if($_SESSION['logged'] == false)
    header("Location:../index.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Tofoo Create Payment</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Style/sign-in.css" rel="stylesheet">
</head>
<body class="text-center">
<main class="form-signin">
    <form method="POST">
        <h1 class="h3 mb-3 fw-normal">Create Payment</h1>
        <div class="form-floating">
            <input type="text" name="card_number" class="form-control" id="floatingInput" placeholder="Card Number" maxlength="16 "required>
            <label for="floatingInput">Card Number</label>
        </div>
        <div class="form-floating">
            <input type="text" name="security_code" class="form-control" id="security_code" placeholder="Security Code" maxlength="3" required>
            <label for="security_code">Security Code</label>
        </div>
        <div class="form-floating">
            <input type="text" name="expiration_date" class="form-control" id="expiration_date" placeholder="State" maxlength="5" required>
            <label for="expiration_date">Expiration Date (Format: MM/YY)</label>
        </div>

        <button style="margin-top:10px;" class="w-100 btn btn-lg btn-primary" value="submit" name="submit" type="submit">Submit</button>
    </form>
    <?php
    if(isset($_POST['submit']))
        $paymentFunctions->createPayment($_GET['user_id'], $_POST['card_number'], $_POST['security_code'], $_POST['expiration_date'], $db);
    ?>
</main>
</body>
</html>