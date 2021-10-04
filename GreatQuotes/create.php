<?php
require('csv_util.php');

$authors = csvToArray('authors.csv');

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
    addCSVRecord('quotes.csv',array($_POST['quote'], $index));
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/new_detail.css"/>
    <title>Quote Creation</title>
</head>
<body>
<?php if(!isset($_POST['submit'])):?>
    <form method="POST">
        <label for="quote">Quote:</label><br>
        <input type="text" id="quote" name="quote"><br><br>
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
    <a href="index.php"><?= 'Back To Index' ?></a>
<?php endif;?>
</body>
</html>
