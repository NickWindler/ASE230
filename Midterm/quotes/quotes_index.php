<?php
session_start();
require('csv_util.php');
require('auth/auth.php');
is_logged();

$authorFunctions->setInputFile('data/authors.csv');
$quoteFunctions->setInputFile('data/quotes.csv');
$authors = $authorFunctions->csvToArray();
$quotes = $quoteFunctions->csvToArray();

#displays a particular quote along with its author. This is used in a for loop so its able to print out
#all of the quotes and their authors.
function displayQuotes($quotes, $authors, $i)
{
    $quote = $quotes[0];
    $author = $authors[0] . " " . $authors[1];
    ?>
    <div class="quote_author">
        <a class="quote" href="quotes/quotes_detail.php?quote=<?=$quote?>&author=<?=$author?>"><h3><?='"' . $quote . '"'?></h3></a>
        <p style="margin: 20px 0 0 10px"><?="-" . $author?></p>
    </div>
    <?php
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/new_index.css"/>
    <title>Quotes Index Page</title>
</head>
<body>
<h1>Very Inspiring and Motivational Quotes</h1>
<div class="row">
    <?php
    for($i = 0; $i < count($quotes); $i++) {
        displayQuotes($quotes[$i], $authors[$quotes[$i][1]], $i);
    }
    ?>
</div>
<?php if($_SESSION['logged'] == true):?>
    <input type="button" onclick="location.href='quotes/quotes_create.php';" value="Create Quote"/>
    <input type="button" onclick="location.href='auth/signout.php';" value="Sign out"/><br>
<?php endif;?>
<?php if($_SESSION['logged'] == false):?>
    <input type="button" onclick="location.href='auth/signin.php';" value="Sign in"/>
    <input type="button" onclick="location.href='auth/signup.php';" value="Sign up"/><br>
<?php endif;?>
<input type="button" onclick="location.href='authors/authors_index.php';" value="Author Index" style="margin-top: 100px;"/>
</body>
</html>