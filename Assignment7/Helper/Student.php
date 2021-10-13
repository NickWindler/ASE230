<?php 
require('CSVHelper.php');

class Student {
    #this function reads the csv file into an array by calling the csvToArray fucntion
    public function createStudentArray()
    {
		$csvFunctions = new csvFunctions();
		$csvFunctions->setInputFile('../Data/student_data.csv');
		return $csvFunctions->csvToArray();
    }

    #this function appends a student to a CSV file by calling the function addCSVRecord
    public function addStudent($element)
    {
		$csvFunctions = new csvFunctions();
		$csvFunctions->setInputFile('../Data/student_data.csv');
		$csvFunctions->addCSVRecord($element);
    }
	
	#this function returns a student at whatever index argument was specified 
	public function getStudent($element)
	{
		$csvFunctions = new csvFunctions();
		$csvFunctions->setInputFile('../Data/student_data.csv');		
		return $csvFunctions->getCSVElement($element);
	}

    #this function modifies the student at the index specified by the user
    public function modifyStudent($modification, $index)
    {
		$csvFunctions = new csvFunctions();
		$csvFunctions->setInputFile('../Data/student_data.csv');		
		$csvFunctions->modifyCSVRecord($modification, $index);
    }

    #this function takes an index and then deletes the student at that index
    public function deleteStudent($index)
    {
		$csvFunctions = new csvFunctions();
		$csvFunctions->setInputFile('../Data/student_data.csv');		
		$csvFunctions->deleteCSVRecord($index);
    }
}
?>