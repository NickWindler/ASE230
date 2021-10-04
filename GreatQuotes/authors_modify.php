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

    $authorEdit = array($_POST['fName'], $_POST['lName']);
    modifyCSVRecord('authors.csv', $authorEdit, $index);
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
    <h2>Select Author to Modify</h2>
    <select id="authors" name="authors">
        <?php
        for($i = 0; $i < count($authors); $i++) {
            displayAuthors($authors, $i);
        }
        ?>
    </select><br><br>
    <label for="quote">New First Name:</label><br>
    <input type="text" id="fName" name="fName"><br><br>
    <label for="quote">New Last Name:</label><br>
    <input type="text" id="lName" name="lName"><br><br>
    <input type="submit" name="submit">
</form>
<?php if(isset($_POST['submit'])):?>
    <h3>Author has been edited, please refresh the page by entering the URL again</h3>
<?php endif;?>
</body>
</html>