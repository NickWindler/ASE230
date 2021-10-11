<?php
session_start();
require('../csv_util.php');
require('../auth/auth.php');
is_logged();

$quote = $_GET['quote'];
$author = $_GET['author'];
$quoteFunctions->setInputFile('../data/quotes.csv');
$quotes = $quoteFunctions->csvToArray();
?>
<!doctype html>
<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/new_index.css"/>
    <title>Quote Details</title>
</head>
<div>

</div>
<body>
<h1>Quote Details</h1>
<div class="quote_author">
    <h1><?='"' . $quote . '"'?></h1>
    <h3 style="margin: 30px 0 0 10px"><?="-" . $author?></h3>
</div>
<?php if($_SESSION['logged'] == true):?>
    <input type="button" onclick="location.href='quotes_modify.php?quote=<?=$quote?>&author=<?=$author?>';" value="Edit Quote"/>
    <input type="button" onclick="location.href='quotes_delete.php?quote=<?=$quote?>&author=<?=$author?>';" value="Delete Quote" style="margin-left: 25px;"/>
<?php endif;?>
</body>
</html>