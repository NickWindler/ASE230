<?php
require('../Helper/Student.php');

//creates student object to access functions
$Student = new Student();

//adds 4 students to the csv file for testing
$Student->addStudent(array('Test Person', 19, 'Senior'));
$Student->addStudent(array('Nick Windler', 21, 'Senior'));
$Student->addStudent(array('Steve Harvey', 20, 'Junior'));
$Student->addStudent(array('Arthur Pendragon', 25, 'Sophomore'));

//creates array from student file and prints to show its content
$students = $Student->createStudentArray();
echo "<pre>";
echo '<h2>Student Array</h2>';
print_r($students);

//displays the element at index 1
echo '<h2>Element at index 1</h2>';
print_r($Student->getStudent(1));

//modifes the 1st and 4th element in the array with new values
$Student->modifyStudent(array('Keanu Reeves', 18, 'Freshmen'), 0);
$Student->modifyStudent(array('Mordred Pendragon', 22, 'Junior'), 3);

//reads the updated student file into $students and outputs the array
$students = $Student->createStudentArray();
echo '<h2>Array after Modifications</h2>';
print_r($students);

//deletes the 1st, 2nd, and 4th students in the array (Steve should be the only remaining person)
$Student->deleteStudent(3);
$Student->deleteStudent(1);
$Student->deleteStudent(0);

//reads the updated student file into $students and outputs the array
$students = $Student->createStudentArray();
echo '<h2>Array after Deletions</h2>';
print_r($students);
?>