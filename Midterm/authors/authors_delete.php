<?php
require('../csv_util.php');

$authorFunctions->setInputFile('../data/authors.csv');
$quoteFunctions->setInputFile('../data/quotes.csv');
$authors = $authorFunctions->csvToArray();
$quotes = $quoteFunctions->csvToArray();

#deletes the selected author on form submit
if(isset($_POST['submit'])) {
    #finds the designated authors index so we know which record to delete
    for($i = 0; $i < count($authors); $i++) {
        $author = $authors[$i][0] . " " . $authors[$i][1];
        if($_GET['author'] == $author)
            $index = $i;
    }

    $authorFunctions->deleteCSVRecord($index);

    #opens the authors csv file and then modifies any author who had a higher index then them.
    #This makes sure none of the indexes are skipped and the for loops that read out the authors
    #won't run into any errors.
    $file = fopen('../data/quotes.csv', 'w');
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
    <link rel="stylesheet" href="../assets/css/new_index.css"/>
    <title>Delete Author</title>
</head>
<body>
<?php if(!isset($_POST['submit'])):?>
    <h1>Author Deletion</h1>
    <form method="POST">
        <h2>Are you sure you want to delete <?=$_GET['author']?> and all of their quotes?</h2>
        <input type="submit" name="submit">
    </form>
<?php endif;?>
<?php if(isset($_POST['submit'])):?>
    <h1>Author Deleted</h1>
    <a href="authors_index.php"><?= 'Back to Index' ?></a>
<?php endif;?>
</body>
</html>