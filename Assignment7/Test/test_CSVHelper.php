<?php
require('../Helper/CSVHelper.php');

//create csvFunctions object to have access to the classes functions
$csvFunctions = new csvFunctions();

//sets the input file for the newly created csv object 
$csvFunctions->setInputFile('../Data/csv_data.csv');

//adds 4 records to the csv file for testing
$csvFunctions->addCSVRecord(array('Test Person', 19, 'Senior'));
$csvFunctions->addCSVRecord(array('Nick Windler', 21, 'Senior'));
$csvFunctions->addCSVRecord(array('Steve Harvey', 20, 'Junior'));
$csvFunctions->addCSVRecord(array('Arthur Pendragon', 25, 'Sophomore'));

//creates array from csv file and prints to show its content
$students = $csvFunctions->csvToArray();
echo "<pre>";
echo '<h2>Student Array</h2>';
print_r($students);

//displays the element at index 1
echo '<h2>Element at index 1</h2>';
print_r($csvFunctions->getCSVElement(1));

//modifies the 1st and 4th element in the array with new values
$csvFunctions->modifyCSVRecord(array('Keanu Reeves', 18, 'Freshmen'), 0);
$csvFunctions->modifyCSVRecord(array('Mordred Pendragon', 22, 'Junior'), 3);

//reads the updated csv file into $students and outputs the array
$students = $csvFunctions->csvToArray();
echo '<h2>Array after Modifications</h2>';
print_r($students);

//deletes the 1st, 2nd, and 4th students in the array (Steve should be the only remaining person)
$csvFunctions->deleteCSVRecord(3);
$csvFunctions->deleteCSVRecord(1);
$csvFunctions->deleteCSVRecord(0);

//reads the updated csv file into $students and outputs the array
$students = $csvFunctions->csvToArray();
echo '<h2>Array after Deletions</h2>';
print_r($students);
 ?>
