<?php
require('../csv_util.php');

$authorFunctions->setInputFile('../data/authors.csv');
$quoteFunctions->setInputFile('../data/quotes.csv');
$authors = $authorFunctions->csvToArray();
$quotes = $quoteFunctions->csvToArray();

#displays an author as an option value (this function is ran through a loop to display all authors)
function displayAuthors($authors, $i) {
    $author = $authors[$i][0] . " " . $authors[$i][1];
    ?>
    <option value="<?=$author?>"><?=$author?></option>
    <?php
}

#will create the quote whenever the form is submitted. Makes sure to assign the quote to the right author by
#using the form value and comparing it to all of the authors in the csv file, and then storing the index value
#to be used in the addCSVRecord function.
if(isset($_POST['submit'])) {
    for($i = 0; $i < count($authors); $i++) {
        $author = $authors[$i][0] . " " . $authors[$i][1];
        if($_POST['authors'] == $author)
            $index = $i;
    }
    $quoteFunctions->addCSVRecord(array($_POST['quote'], $index));
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/new_detail.css"/>
    <title>Quote Creation</title>
</head>
<body>
<?php if(!isset($_POST['submit'])):?>
    <h1>Quote Creation</h1>
    <form method="POST">
        <label for="quote">Quote:</label><br>
        <input type="text" id="quote" class ="textbox" name="quote"><br><br>
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
    <h1>Quote Created</h1>
    <a href="../index.php"><?= 'Back To Index' ?></a>
<?php endif;?>
</body>
</html>
