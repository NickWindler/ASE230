<?php
require('csv_util.php');

$quote = $_GET['quote'];
$author = $_GET['author'];
$quotes = csvToArray('quotes.csv');
?>
<!doctype html>
<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/new_index.css"/>
    <title>Quote Details</title>
</head>
<div>

</div>
<body>
<div class="quote_author">
    <h1><?='"' . $quote . '"'?></h1>
    <h3 style="margin: 30px 0 0 10px"><?="-" . $author?></h3>
</div>
<input type="button" onclick="location.href='modify.php?quote=<?=$quote?>&author=<?=$author?>';" value="Edit Quote"/>
<input type="button" onclick="location.href='delete.php?quote=<?=$quote?>&author=<?=$author?>';"" value="Delete Quote" style="margin-left: 25px;/>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>