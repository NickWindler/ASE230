<?php
require('json_util.php');

$students = jsonToArray('class.json');
$randomNum = rand(0, count($students) - 1);
$personToAdd = $students[$randomNum];

array_push($students, $personToAdd);

saveArrayToFile($students, 'class.json');
?>
<h1><?= 'User "' . $personToAdd['name'] . '" has been created.' ?></h1>
<a href="index.php"><?= 'Back To Index' ?></a>