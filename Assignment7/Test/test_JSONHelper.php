<?php
require('../Helper/JSONHelper.php');

//create csvFunctions object to have access to the classes functions
$jsonFunctions = new jsonFunctions();

//sets the input file for the newly created json object 
$jsonFunctions->setInputFile('../Data/json_data.json');

//adds 4 records to the json file for testing
$jsonFunctions->addJSONRecord(array('Test Person', 19, 'Senior'));
$jsonFunctions->addJSONRecord(array('Nick Windler', 21, 'Senior'));
$jsonFunctions->addJSONRecord(array('Lebron James', 23, 'Sophomore'));
$jsonFunctions->addJSONRecord(array('Lamar Jackson', 24, 'Freshmen'));

//creates array from json file and prints to show its content
$students = $jsonFunctions->jsonToArray();
echo "<pre>";
echo '<h2>Student Array</h2>';
print_r($students);

//displays the element at index 1
echo '<h2>Element at index 1</h2>';
print_r($jsonFunctions->getJsonElement(1));

//modifies the 1st and 4th element in the array with new values
$jsonFunctions->modifyJSONRecord(array('Randy Moss', 25, 'Junior'), 0);
$jsonFunctions->modifyJSONRecord(array('Steph Curry', 20, 'Senior'), 3);

//reads the updated json file into $students and outputs the array
$students = $jsonFunctions->jsonToArray();
echo '<h2>Array after Modifications</h2>';
print_r($students);

//deletes the 1st, 2nd, and 4th students in the array (Steve should be the only remaining person)
$jsonFunctions->deleteJSONRecord(3);
$jsonFunctions->deleteJSONRecord(1);
$jsonFunctions->deleteJSONRecord(0);

//reads the updated json file into $students and outputs the array
$students = $jsonFunctions->jsonToArray();
echo '<h2>Array after Modifications</h2>';
print_r($students);
?>