<?php
#This function takes a file as an arguement and checks if it exists. If so, it goes ahead
#and opens the file for reading, if not, then it returns an empty array. Once the file is open, 
#it loops through each lune of the csv file, inserting each element seperated by a comma. It then 
#closes the file and returns the array containing all of the csv elements.
function csvToArray($inputFile)
{
    if (file_exists($inputFile)) {
        $file = fopen($inputFile, 'r');
        while ($row = fgetcsv($file)) {
            $array[] = $row;
        }
        fclose($file);
        return $array;
    }
    return [];
}

#This function takes a file and an element (which is an index). It checks to see if the file exists 
#and returns an empty array if it doesn't. If it does, it calls the csvToArray function and then 
#returns the element of the array at index element (this is the element arguement, so once again it's
#acting as an index)
function getCSVElement($inputFile, $element)
{
    if (file_exists($inputFile)) {
        $array = csvToArray($inputFile);
        return $array[$element];
    }
    return [];
}

#This function takes a file and an element (actual array element). It checks to see if the file exists,
#if it does then it will open the file for appending, and append the element to the end of the csv file.
#This is done through the fputcsv function. After that is done it closes the file.
function addCSVRecord($inputFile, $element)
{
    if (file_exists($inputFile)) {
        $file = fopen($inputFile, 'a');
        fputcsv($file, $element);
        fclose($file);
    }
}

#This function takes a file, modification (element that will overwrite another element in the array), and
#an index to overwrite an element at. It checks to make sure the file exists, and then calls the csvToArray
#function to read the file into an array. Once the array is created it then opens the file for writing, and 
#proceeds to loop through the array, line by line, and overwrites the element at the index arguement with the
#modification the user specified. Lastly, once all of this is done it closes the file.
function modifyCSVRecord($inputFile, $modification, $index)
{
    if (file_exists($inputFile)) {
        $array = csvToArray($inputFile);
        $file = fopen($inputFile, 'w');
        for($i = 0; $i < count($array); $i++) {
            if($i == $index) {
                $array[$i] = $modification;
            }
            fputcsv($file, $array[$i]);
        }
        fclose($file);
    }
}

#This function is the exact same as the last, except it doesn't require a modification arguement. This time, 
#whenever the correct index is reached it will empty the line (or set it to an empty array), rather than replace
#it with a modification.
function emptyCSVRecord($inputFile, $index)
{
    if (file_exists($inputFile)) {
        $array = csvToArray($inputFile);
        $file = fopen($inputFile, 'w');
        for($i = 0; $i < count($array); $i++) {
            if($i == $index) {
                $array[$i] = [];
            }
            fputcsv($file, $array[$i]);
        }
        fclose($file);
    }
}

#This function takes an input file and an index as arguements. The file is validated to make sure it exists and
#then an array is created of the CSV file, and the file is opened for writing. This array is then looped through 
#and every instance of the array will be written back into the CSV file, unless it has the index specified by the
#input. In this case the line wouldn't be written back into the file, therefore "deleting" it from the file.
function deleteCSVRecord($inputFile, $index)
{
    if (file_exists($inputFile)) {
        $array = csvToArray($inputFile);
        $file = fopen($inputFile, 'w');
        for($i = 0; $i < count($array); $i++) {
            if($i != $index) {
                fputcsv($file, $array[$i]);
            }
        }
        fclose($file);
    }
}
?>