<?php
require('csv_util.php');

$authors = csvToArray('authors.csv');
$quotes = csvToArray('quotes.csv');
$originalQuote = $_GET['quote'];
$originalAuthor = $_GET['author'];

for($i = 0; $i < count($quotes); $i++) {
    $quote = $quotes[$i][0];
    if($originalQuote == $quote)
        $quoteIndex = $i;
}

function displayAuthors($authors, $i) {
    $author = $authors[$i][0] . " " . $authors[$i][1];
    ?>
    <option value="<?=$author?>"><?=$author?></option>
    <?php
}

if(isset($_POST['submit'])) {
    for($i = 0; $i < count($authors); $i++) {
        $author = $authors[$i][0] . " " . $authors[$i][1];
        if($_POST['authors'] == $author)
            $index = $i;
    }
    modifyCSVRecord('quotes.csv',array($_POST['quote'], $index), $quoteIndex);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/new_detail.css"/>
    <title>Quote Modification</title>
</head>
<body>
<?php if(!isset($_POST['submit'])):?>
    <form method="POST" onsubmit="">
        <label for="quote">Quote:</label><br>
        <input type="text" id="quote" name="quote" value="<?=$originalQuote?>"><br><br>
        <label for="author">Author:</label>
        <select id="authors" name="authors">
            <?php
            for($i = 0; $i < count($authors); $i++) {
                displayAuthors($authors, $i);
            }
            ?>
        </select><br><br>
        <input type="submit" name="submit">
    </form>
<?php endif;?>
<?php if(isset($_POST['submit'])):?>
    <h1>Quote Modified</h1>
    <a href="index.php"><?= 'Back To Index' ?></a>
<?php endif;?>
</body>
</html>
