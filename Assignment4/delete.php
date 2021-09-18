<?php
require('json_util.php');

$students = jsonToArray('class.json');
$element = getJsonElement('class.json', $_GET['i']);

array_splice($students, $_GET['i'], 1);

saveArrayToFile($students, 'class.json');
?>
<h1><?= 'User "' . $element['name'] . '" has been deleted.' ?></h1>
<a href="index.php"><?= 'Back To Index' ?></a>


