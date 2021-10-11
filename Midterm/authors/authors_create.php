<?php
require('../csv_util.php');

$authorFunctions->setInputFile('../data/authors.csv');
$authors = $authorFunctions->csvToArray();

#adds the form information to an array after submission
if(isset($_POST['submit'])) {
    $authorFunctions->addCSVRecord(array($_POST['fName'],$_POST['lName']));
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/new_detail.css"/>
    <title>Author Creation</title>
</head>
<body>
<?php if(!isset($_POST['submit'])):?>
    <h1>Author Creation</h1>
    <form method="POST">
        <label for="fName">First Name:</label><br>
        <input type="text" id="fName" class="textbox" name="fName"><br><br>
        <label for="lName">Last Name:</label><br>
        <input type="text" id="lName" class="textbox" name="lName"><br><br>
        <input type="submit" name="submit">
    </form>
<?php endif;?>
<?php if(isset($_POST['submit'])):?>
    <h1>Author Created</h1>
    <a href="authors_index.php"><?= 'Back To Index' ?></a>
<?php endif;?>
</body>
</html>