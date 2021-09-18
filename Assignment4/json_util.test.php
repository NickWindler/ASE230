<h1>JSON To Array</h1>
<?php
require('json_util.php');

$array = jsonToArray('class.json');
echo "<pre>";
print_r($array);
?>
<br>
<h1>Get JSON Element</h1>
<?php
$randomNum = rand(0, count($array) - 1);
$element = getJsonElement('class.json', $randomNum);
echo "<pre>";
print_r($element);
?>
<br>
<h1>Save Array to File (This is set up so it adds the array under "Get JSON Element")</h1>
<?php
array_push($array, $element);
saveArrayToFile($array, 'class.json');
print_r($array);
?>