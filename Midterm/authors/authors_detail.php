<?php
session_start();
require('../csv_util.php');
require('../auth/auth.php');
is_logged();

#Gets the author and splits up the authors name into their first and last name
$quoteAuthor = $_GET['author'];
$parts = explode(" ", $quoteAuthor);
$lName = array_pop($parts);
$fName = implode(" ", $parts);

$authorFunctions->setInputFile('../data/authors.csv');
$quoteFunctions->setInputFile('../data/quotes.csv');
$authors = $authorFunctions->csvToArray();
$quotes = $quoteFunctions->csvToArray();

#finds the authors index so we will be able to display the correct quotes for the given author
function findAuthorIndex($authors) {
    for($i = 0; $i < count($authors); $i++) {
        $author = $authors[$i][0] . " " . $authors[$i][1];
        if($_GET['author'] == $author)
            return $i;
    }
}

#function used to output the all of the authors quotes. This is based off of $i
#that we returned from findAuthorIndex
function displayQuotes($quotes, $index) {
    for($i = 0; $i < count($quotes); $i++) {
        if($index == $quotes[$i][1]) {
            echo '<h3>"'.$quotes[$i][0].'"</h3>';
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/new_index.css"/>
    <title>Quotes by <?=$quoteAuthor?></title>
</head>
<body>
<h1>Quotes by <?=$quoteAuthor?></h1>
<?php
$authorIndex = findAuthorIndex($authors);
displayQuotes($quotes, $authorIndex);
?>
</body>
<?php if($_SESSION['logged'] == true):?>
    <input type="button" onclick="location.href='authors_modify.php?fName=<?=$fName?>&lName=<?=$lName?>';" value="Edit Author"/>
    <input type="button" onclick="location.href='authors_delete.php?author=<?=$quoteAuthor?>';" value="Delete Author" style="margin-left: 25px;"/>
<?php endif;?>
</html>