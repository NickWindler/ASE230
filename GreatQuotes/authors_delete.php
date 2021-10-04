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

    $file = fopen('authors.csv', 'w');
    for($i = 0; $i < count($authors); $i++) {
        if($i != $index) {
            fputcsv($file, $authors[$i]);
        }
    }
    fclose($file);

    $file = fopen('quotes.csv', 'w');
    for($i = 0; $i < count($quotes); $i++) {
        if($index != $quotes[$i][1]) {
            if($index < $quotes[$i][1]) {
                $newIndex = $quotes[$i][1] - 1;
            }
            else {
                $newIndex = $quotes[$i][1];
            }
            $quoteToInsert = array($quotes[$i][0], $newIndex);
            fputcsv($file, $quoteToInsert);
        }
    }
    fclose($file);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/new_index.css"/>
    <title>Delete Author</title>
</head>
<body>
<?php if(!isset($_POST['submit'])):?>
    <h2>Please select the author you'd like to delete</h2>
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
<?php endif;?>
<?php if(isset($_POST['submit'])):?>
    <h1>Author Deleted</h1>
    <a href="index.php"><?= 'View Index to Confirm Author Deletion' ?></a>
<?php endif;?>
</body>
</html>