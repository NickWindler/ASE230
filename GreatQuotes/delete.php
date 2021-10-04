<?php
require('csv_util.php');

$quotes = csvToArray('quotes.csv');
$quoteToDelete = $_GET['quote'];
$author = $_GET['author'];

if(isset($_POST['submit'])) {
    for($i = 0; $i < count($quotes); $i++) {
        $quote = $quotes[$i][0];
        if($quoteToDelete == $quote)
            $quoteIndex = $i;
    }
    deleteCSVRecord('quotes.csv', $quoteIndex);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/new_index.css"/>
    <title>Quote Deletion</title>
</head>
<body>
<?php if(!isset($_POST['submit'])):?>
    <form method="POST">
        <div class="quote_author">
            <h3><?='"' . $quoteToDelete . '"'?></h3>
            <p style="margin: 20px 0 0 10px"><?="-" . $author?></p>
        </div>
        <h2>Are you sure you want to delete this quote?</h2>
        <input type="submit" name="submit">
    </form>
<?php endif;?>
<?php if(isset($_POST['submit'])):?>
    <h1>Quote has been Deleted</h1>
    <a href="index.php"><?= 'Back To Index' ?></a>
<?php endif;?>
</body>
</html>


