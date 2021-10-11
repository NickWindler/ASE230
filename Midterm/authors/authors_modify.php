<?php
session_start();
require('../csv_util.php');

$fName = $_GET['fName'];
$lName = $_GET['lName'];
$authorFunctions->setInputFile('../data/authors.csv');
$authors = $authorFunctions->csvToArray();;
$authorFullName = $fName . " " . $lName;

#after the user clicks the submit button, the modifications will overwrite the current authors information
if(isset($_POST['submit'])) {
    #finds the authors index so we know where to modify the record
    for($i = 0; $i < count($authors); $i++) {
        $author = $authors[$i][0] . " " . $authors[$i][1];
        if($authorFullName == $author)
            $index = $i;
    }

    #specifies what the file is called and where it's located
    $target_dir = "/Midterm/img/";
    $target_file= $target_dir. basename($_FILES["img"]["name"]);

    #moves the file to our img directory if it doesn't already exist there
    if(!file_exists( "C:/xampp/htdocs" . $target_file))
        move_uploaded_file($_FILES["img"]["tmp_name"], "C:/xampp/htdocs" . $target_file);

    #if the user uploaded a file (error = 0), then we will add the $target_file as an additional value
    #in the array. If no file was specified, then we only insert the authors name into the array.
    if($_FILES['img']['error'] == 0) {
        $authorEdit = array($_POST['fName'], $_POST['lName'], $target_file);
    }
    else {
        $authorEdit = array($_POST['fName'], $_POST['lName']);
    }
    $authorFunctions->modifyCSVRecord($authorEdit, $index);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/new_detail.css"/>
    <title>Author Modification</title>
</head>
<body>
<?php if(!isset($_POST['submit'])):?>
    <h1>Author Modification</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="quote">New First Name:</label><br>
        <input type="text" id="fName" class="textbox" name="fName" value="<?=$fName?>"><br><br>
        <label for="quote">New Last Name:</label><br>
        <input type="text" id="lName" class="textbox" name="lName" value="<?=$lName?>"><br><br>
        <label for="img">Upload Author Image:</label><br>
        <input type="file" id="img" name="img"><br><br>
        <input type="submit" name="submit">
    </form>
<?php endif;?>
<?php if(isset($_POST['submit'])):?>
    <h1>Your file has been uploaded and the author has been modified</h1>
    <a href="authors_index.php"><?= 'Back To Index' ?></a>
<?php endif;?>
</body>
</html>