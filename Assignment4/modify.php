<?php
require('json_util.php');

$students = jsonToArray('class.json');
$element = getJsonElement('class.json', $_GET['i']);

$students[$_GET['i']]['name'] = "Ryan Reynolds";

saveArrayToFile($students, 'class.json');
?>
<h1><?= 'User "' . $element['name'] . '" has been modified to "' . $students[$_GET['i']]['name'] . '".' ?></h1>
<a href="index.php"><?= 'Back To Index' ?></a>