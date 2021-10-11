<?php
require('../csv_util.php');

$originalQuote = $_GET['quote'];
$originalAuthor = $_GET['author'];

$authorFunctions->setInputFile('../data/authors.csv');
$quoteFunctions->setInputFile('../data/quotes.csv');
$authors = $authorFunctions->csvToArray();
$quotes = $quoteFunctions->csvToArray();

#loops through quotes array and takes note of the line/array index, as well as the authors index.
for($i = 0; $i < count($quotes); $i++) {
    $quote = $quotes[$i][0];
    if($originalQuote == $quote) {
        $quoteIndex = $i;
        $quoteAuthorIndex = $quotes[$i][1];
    }
}

#displays all of the authors in the dropdown list, making sure to set the default value
#to the correct author. This is done by comparing the $quoteAuthorIndex with the loop index. Once
#they equal each other, then isQuoteAuthor is set to true and this option is then set as the default option.
function displayAuthors($authors, $i, $isQuoteAuthor=false) {
    if($isQuoteAuthor)
        $selected = 'selected';
    else
        $selected = '';
    $author = $authors[0] . " " . $authors[1];
    echo '<option value="'.$i.'" '.$selected.'>'.$author.'</option>';
}

#whenever the form is submitted, we then loop through the authors array to find the index of the author we
#need to modify. This is then used as an argument for the modifyCSVRecord function, so it modifies the correct author.
if(isset($_POST['submit'])) {
    for($i = 0; $i < count($authors); $i++) {
        $author = $authors[$i][0] . " " . $authors[$i][1];
        if($_POST['authors'] == $author)
            $index = $i;
    }
    $quoteFunctions->modifyCSVRecord(array($_POST['quote'], $_POST['authors']), $quoteIndex);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/new_detail.css"/>
    <title>Quote Modification</title>
</head>
<body>
<?php if(!isset($_POST['submit'])):?>
    <h1>Modify Quote</h1>
    <form method="POST" onsubmit="">
        <label for="quote">Quote:</label><br>
        <input type="text" id="quote" class="textbox" name="quote" value="<?=$originalQuote?>"><br><br>
        <label for="author">Author:</label>
        <select id="authors" name="authors">
            <?php
            for($i = 0; $i < count($authors); $i++) {
                if($quoteAuthorIndex == $i)
                    $selected = true;
                else
                    $selected = false;
                displayAuthors($authors[$i], $i, $selected);
            }
            ?>
        </select><br><br>
        <input type="submit" name="submit">
    </form>
<?php endif;?>
<?php if(isset($_POST['submit'])):?>
    <h1>Quote Modified</h1>
    <a href="../index.php"><?= 'Back To Index' ?></a>
<?php endif;?>
</body>
</html>
