<?php
session_start();
require('../csv_util.php');
require('../auth/auth.php');
is_logged();

$authorFunctions->setInputFile('../data/authors.csv');
$authors = $authorFunctions->csvToArray();

#displays the authors name, along with their profile picture. If there isn't any picture URL in the authors
#data file, then it will display the default image.
function displayAuthors($author)
{
    ?>
    <div class="quote_author">
        <a class="quote" href="authors_detail.php?author=<?=$author[0] . " " . $author[1];?>"><h3><?=$author[0] . " " . $author[1];?></h3></a>
        <?php if(isset($author[2])):?>
            <img src="<?=$author[2]?>" height="100px" width="100px" style="margin: 0 0 25px 25px;">
        <?php endif;?>
        <?php if(!isset($author[2])):?>
            <img src="\Midterm\img\default.jpg" height="100px" width="100px" style="margin: 0 0 25px 25px;">
        <?php endif;?>
    </div>
    <?php
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/new_index.css"/>
    <title>Quote Creation</title>
</head>
<body>
<h1>Author List</h1>
<div class="row">
    <?php
    for($i = 0; $i < count($authors); $i++) {
        displayAuthors($authors[$i]);
    }
    ?>
</div>
</body>
<?php if($_SESSION['logged'] == true):?>
    <input type="button" onclick="location.href='authors_create.php';" value="Create Author"/><br>
<?php endif;?>
<input type="button" onclick="location.href='../index.php';" value="Quote Index" style="margin-top: 100px;"/>
</html>

