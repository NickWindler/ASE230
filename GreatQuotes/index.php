<?php
require('csv_util.php');

$quotes = csvToArray('quotes.csv');
$authors = csvToArray('authors.csv');


function displayQuotes($quotes, $authors, $i)
{
    $quote = $quotes[0];
    $author = $authors[0] . " " . $authors[1];
    ?>
    <div class="quote_author">
        <a class="quote" href="detail.php?quote=<?=$quote?>&author=<?=$author?>"><h3><?='"' . $quote . '"'?></h3></a>
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
<input type="button" onclick="location.href='create.php';" value="Create Quote"/>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>