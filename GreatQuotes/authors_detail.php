<?php
require('csv_util.php');

$authors = csvToArray('authors.csv');
$quotes = csvToArray('quotes.csv');

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
    print($authors[$index][0] . " " . $authors[$index][1] . ": ");
    for($i = 0; $i < count($quotes); $i++) {
        if($index == $quotes[$i][1]) {
            print('"' . $quotes[$i][0] . '" ,');
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/new_index.css"/>
    <title>Display Authors Quotes</title>
</head>
<body>
<form method="POST">
    <select id="authors" name="authors">
        <?php
        for($i = 0; $i < count($authors); $i++) {
            displayAuthors($authors, $i);
        }
        ?>
    </select><br><br>
    <input type="submit" name="submit">
</form>
</body>
</html>